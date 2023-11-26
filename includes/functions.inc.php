<?php

// Checks if user already exists,
// Users prepared statements to prevent dependency injection
function userNameExists($conn, $username){
  $sql = "SELECT * FROM users WHERE userName = ?;";
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../index.php?error=stmtFailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $username);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)){
    return $row;
  }
  else{
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

// Signup user,
// Hashes password with bcrypt to prevent data tampering
function createUser($conn, $username, $pswrd){
  $sql = "INSERT INTO users (userName, userPswrd) VALUES (?, ?);";
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../index.php?error=stmtFailed");
    exit();
  }

  $hashedPswrd = password_hash($pswrd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPswrd);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  header("location: ../loading.php?error=None");
  exit();
}
