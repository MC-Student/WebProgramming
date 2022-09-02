<?php

function emptyInputSignup($name, $email, $username, $password, $pwd_repeat)
{
    $result;
    if(empty($name)||empty($email)||empty($username)||empty($password)||empty($pwd_repeat))
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    
    return $result;
}

function invalidUid($username)
{
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username))
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    
    return $result;
}

function invalidEmail($email)
{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    
    return $result;
}

function passwordMatch($password, $pwd_repeat)
{
    if($password!==$pwd_repeat)
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    
    return $result;
}

function usernameExists($conn, $username)
{
    $sql = "SELECT * FROM users WHERE usersUid = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: sign_up.php?error=stmtfailed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    
    $resultData = mysqli_stmt_get_result($stmt);
    
    if ($row == mysqli_fetch_assoc($resultData))
    {
        return $row;
    }
    else
    {
        $result = false;
        return $result;
    }
    
    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $password)
{
    $sql = "INSERT INTO users(usersName, usersEmail, usersUid, usersPwd) VALUES(?, ?, ?, ?);";
    $authorize_sql = "INSERT INTO authorizedusers(auth_username, auth_password) VALUES(?, ?);";
    
    $stmt = mysqli_stmt_init($conn);
    $auth_stmt = mysqli_stmt_init($conn);
    
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: sign_up.php?error=stmtfailed");
        exit();
    }
    
    if(!mysqli_stmt_prepare($auth_stmt, $authorize_sql))
    {
        header("location: sign_up.php?error=authstmtfailed");
        exit();
    }

    
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_bind_param($auth_stmt, "ss", $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_execute($auth_stmt);
    mysqli_stmt_close($stmt);
    mysqli_stmt_close($auth_stmt);
    header("location: sign_up.php?error=none");
    exit();
}

function emptyInputLogin($username, $password)
{
    $result;
    if(empty($username)||empty($password))
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    
    return $result;
}

function loginUser($conn, $username, $password)
{
    $usernameExists = usernameExists($conn, $username, $username);
   
    if($usernameExists===false)
    {
        header("location: log_in.php?error=wronglogin");
        exit();
    }
    
    $pwdHashed = $usernameExists["usersPwd"];
    $checkPwd = password_verify($password, $pwdHashed);
    
    if($checkPwd===false)
    {
        header("location: log_in.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd===true)
    {
        session_start();
        $_SESSION["userID"] = $usernameExists["auth_UserID"];
        $_SESSION["userUID"] = $usernameExists["auth_username"];
        header("location: index.php");
        exit();
    }  
}

function authorizeUser($conn, $username, $password)
{    
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    $checkPwd = password_verify($password, $hashedPwd);
    
    $auth_check_sql = "SELECT * FROM authorizedusers WHERE auth_username=? AND auth_password=?;";
    
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $auth_check_sql);
    mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    
    $rowCount = 0;
    
    $resultRows = mysqli_stmt_get_result($stmt);
    if ($row == mysqli_fetch_assoc($resultRows))
    {
    $rowCount++;
    }
    
    if($rowCount === 1)
    {
        $id_sql = "SELECT auth_userID from authorizedusers WHERE auth_username=?;";
        $id_stmt = mysqli_stmt_init($conn);
        mysqli_stmt_prepare($id_stmt, $id_sql);
        mysqli_stmt_bind_param($id_stmt, "s", $username);
        mysqli_stmt_execute($id_stmt);
        $auth_userID = ['auth_userID'];
        mysqli_stmt_close($id_stmt);
    }
    
    mysqli_stmt_close($stmt);
    
    if ($rowCount == 1)
    {
        session_start();
        $_SESSION["auth_userID"] = $auth_userID;
        header("location: index.php");
        exit();
    }
    
    header("location: log_in.php?error=$rowCount");
    exit();

    }

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

