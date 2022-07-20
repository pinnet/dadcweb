pwd
@echo off
set gitpath=%1
set arg=%2
echo %arg%
cd %gitpath%
:again 
   echo Commit to git repository? %arg%
   set /p answer=Commit build to repo Y/N?
   if /i "%answer:~,1%" EQU "Y" goto commit
   if /i "%answer:~,1%" EQU "N" exit /b
   echo Please type Y for Yes or N for No
   goto again
:commit
git add .
git commit -m %arg%
git push
echo Build complete.
:topush
   echo push to git ?
   set /p answer=Commit build to repo Y/N?
   if /i "%answer:~,1%" EQU "Y" goto push
   if /i "%answer:~,1%" EQU "N" exit /b
   echo Please type Y for Yes or N for No
   goto topush
:push
   curl https://dannyarnold.net/gitpull.php
set /p= "Press Enter to continue..."
exit /b