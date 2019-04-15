title Launching Servers...
echo Kill Avaya
@echo off
taskkill /f /im "acsCNTRL.exe" /T
taskkill /f /im "acsApp.exe" /T
taskkill /f /im "wscript.exe" /T
taskkill /f /im "ACScript.exe" /T
taskkill /f /im "acsSRV.exe" /T
taskkill /f /im "acsRep.exe" /T


REM @echo off
REM 
REM call getCmdPID
REM set "current_pid=%errorlevel%"
REM 
REM for /f "skip=3 tokens=2 delims= " %%a in ('tasklist /fi "imagename eq cmd.exe"') do (
REM if "%%a" neq "%current_pid%" (
REM TASKKILL /PID %%a /f /T >nul 2>nul
REM )
REM )
REM timeout 5
REM echo Kill Node
REM for /f "skip=3 tokens=2 delims= " %%a in ('tasklist /fi "imagename eq node.exe"') do (
REM if "%%a" neq "%current_pid%" (
REM TASKKILL /PID %%a /f /T >nul 2>nul
REM )
REM )
REM 
REM 
REM @REM DEFINE PATH TO BATCH FILES
REM SET batch_file_Path="C:\wamp\batch_files"
REM 
REM @REM Change directory to batch files
REM cd %batch_file_Path%
REM 
REM @REM #######################
REM @REM # LAUNCH NODE SERVERS #
REM @REM #######################
REM echo Launch Node Servers
REM @REM RADAR
REM start cmd /k launch_server.bat C:\wamp\www\radar
REM 
REM @REM RADAR_SCHEDULE
REM start cmd /k launch_server.bat C:\wamp\www\radar_schedule
REM 
REM 
REM @REM ######################################################################
REM @REM # LAUNCH NODE SERVERS WITH "NODE FILENAME.JS" INSTEAD OF "NPM START" #
REM @REM ######################################################################
REM 
REM @REM LOGIN_DATA_SERVER
REM start cmd /k launch_server_node.bat login_data_server.js
REM 
REM @REM WALLBOARD_SERVER
REM start cmd /k launch_server_node.bat wallboard_server.js
REM 
REM @REM SERVER
REM start cmd /k launch_server_node.bat server.js


@REM ########################
@REM # LAUNCH AVAYA REPORTS #
@REM ########################
echo Launch Avaya
@REM Launch CMS Supervisor and wait 10 seconds
"C:\Program Files (x86)\Avaya\CMS Supervisor R16\acsRun.exe" /L:enu
REM "C:\Program Files\AutoHotkey\AutoHotkey.exe" "\\Path\To\File\cmsLogin.ahk"
"C:\Program Files\AutoHotkey\AutoHotkey.exe" "C:\xampp\htdocs\avayareports\scripts\cmsLogin.ahk"
timeout 10
REM echo Launch Avaya Reports
REM @REM Launch Reports
REM "\\Path\To\File\Agent Status.acsup"
REM "\\Path\To\File\RE - Wallboard.acsup"
REM "\\Path\To\File\RD - Wallboard.acsup"
REM "\\Path\To\File\WT - All Agent LoginLogout.acsup"
REM "\\Path\To\File\WT - Agent Realtime.acsup"

REM timeout 2
exit