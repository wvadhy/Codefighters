using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using CodeFighters.Models;
using CodeFighters.Data;
using IronPython.Hosting;
using Microsoft.Scripting.Hosting;

namespace CodeFighters.GameMaster
{
    public class GameWorker
    {
        private string _playerOneReturnMessage;
        public string PlayerOneReturnMessage 
        { 
            get
            {
                string temp = _playerOneReturnMessage;
                _playerOneReturnMessage = "";
                return temp;
            }
            set
            {
                _playerOneReturnMessage = value;
            }
        }
        private string _playerTwoReturnMessage;
        public string PlayerTwoReturnMessage
        {
            get
            {
                string temp = _playerTwoReturnMessage;
                _playerTwoReturnMessage = "";
                return temp;
            }
            set
            {
                _playerOneReturnMessage = value;
            }
        }

        private const int TICKS = 60;

        public GameModel Game { get; set; }
        private ApiContext _apiContext;
        private bool _running;
        private ScriptEngine engine;
        private ScriptScope scope;

        public GameWorker(GameModel gameModel, ApiContext apiContext)
        {
            Game = gameModel;
            _apiContext = apiContext;
            _running = false;

            engine = Python.CreateEngine();
            scope = engine.CreateScope();

            _playerOneReturnMessage = "";
            _playerTwoReturnMessage = "";
        }

        private void UpdateDatabase()
        {
            _apiContext.Update(Game);
            _apiContext.SaveChanges();
        }

        public void UserInput(string input, bool isPlayerOne)
        {
            var tempReturnMessage = "\n";

            if (input.ToLower().Contains("isready"))
            {
                tempReturnMessage += "isReady:";
                if (isPlayerOne)
                {
                    if(Game.PlayerOneReady)
                        tempReturnMessage += "true";
                    else
                        tempReturnMessage += "false";
                }
                else
                {
                    if (Game.PlayerTwoReady)
                        tempReturnMessage += "true";
                    else
                        tempReturnMessage += "false";
                }
            }

            if (input.ToLower().Contains("health"))
            {
                tempReturnMessage += "Health:";
                if (isPlayerOne)
                {
                    tempReturnMessage += Game.PlayerOneHealth.ToString();
                }
                else
                {
                    tempReturnMessage += Game.PlayerTwoHealth.ToString();
                }
            }

            if (input.ToLower().Contains("turnnum"))
            {
                tempReturnMessage += "TurnNum:" + Game.TurnNumber.ToString();
            }

            if (input.ToLower().Contains("turn"))
            {
                tempReturnMessage += "Turn:";
                if (isPlayerOne)
                {
                    if (Game.Turn.Id == Game.PlayerOne.Id)
                        tempReturnMessage += "true";
                    else
                        tempReturnMessage += "false";
                }
                else
                {
                    if (Game.Turn.Id == Game.PlayerTwo.Id)
                        tempReturnMessage += "true";
                    else
                        tempReturnMessage += "false";
                }
            }

            if (input.ToLower().Contains("timecreat"))
            {
                tempReturnMessage += "TimeCreated:" + Game.CreatedAt.ToString();
            }

            if (input.ToLower().Contains("timestart"))
            {
                tempReturnMessage += "TimeEnded:" + Game.StartTime.ToString();
            }

            if(isPlayerOne)
                PlayerOneReturnMessage = tempReturnMessage;
            else
                PlayerTwoReturnMessage = tempReturnMessage;
        }

        public void Run()
        {
            _running = true;


            while (_running)
            {
                var start = DateTime.Now;

                if(Game.PlayerOneReady && Game.PlayerTwoReady)
                {
                    if (!Game.HasStarted)
                    {
                        Game.HasStarted = true;
                        Game.StartTime = DateTime.Now;
                        UpdateDatabase();
                    }

                    Game.QuestionNumber++;
                    UpdateDatabase();
                }

                if (!Game.HasStarted && Game.StartTime.AddSeconds(GameModel.MAX_SEC_WAITING_FOR_PLAYERS) < DateTime.Now)
                {
                    Game.IsActive = false;
                    Game.EndTime = DateTime.Now;
                    UpdateDatabase();
                    PlayerOneReturnMessage += "Game Aborted";
                    PlayerTwoReturnMessage += "Game Aborted";
                    break;
                }
                   
                UpdateDatabase();
                var end = DateTime.Now;
                var elapsed = end - start;
                var sleep = TICKS - elapsed.Milliseconds;
                if (sleep > 0)
                    Thread.Sleep(sleep);
            }

            Game.IsActive = false;
        }

        public void End()
        {
            _running = false;
        }
    }
}
