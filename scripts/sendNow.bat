@echo off
Powershell -Command "& %~dp0sendNow.ps1 -reciever %1 -filename %2" 