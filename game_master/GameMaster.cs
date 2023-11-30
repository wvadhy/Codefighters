using CodeFighters.Data;
using CodeFighters.Models;
using System.Threading;

namespace CodeFighters.GameMaster
{
    public class GameMaster : IGameMaster
    {
        public List<GameWorker> ActiveGames { get; private set; }
        public List<Thread> ActiveGameThreads { get; private set; }

        public GameMaster()
        {
            ActiveGames = new List<GameWorker>();
            ActiveGameThreads = new List<Thread>();
        }

        public GameWorker CreateGame(GameModel gameModel, ApiContext apiContext)
        {
            var game = new GameWorker(gameModel, apiContext);
            ActiveGames.Add(game);
            return game;
        }

        public void StartGame(Guid gameId)
        {
            var game = ActiveGames.FirstOrDefault(g => g.Game.Id == gameId);

            if (game == null)
            {
                throw new ArgumentException("GameWorker not found");
            }

            var thread = new Thread(new ThreadStart(game.Run));
            ActiveGameThreads.Add(thread);

            thread.Start();
        }

        public void EndGame(Guid gameId)
        {
            var game = ActiveGames.FirstOrDefault(g => g.Game.Id == gameId);

            if (game == null)
            {
                throw new ArgumentException("GameWorker not found");
            }

            game.End();
        }
    }
}
