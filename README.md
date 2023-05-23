# Strict Email Login
Allow only the user to login only with email, a Open Source Social Network component. It is a modified component by lianglee (structural, ossn_com.php file) but the actions code are a modified OSSN v7.0. The ossn_com.xml was based on the information on OSSN's website.

## Download Link
https://github.com/thedoggybrad/StrictEmailLogin/releases/download/1.0/StrictEmailLogin.zip

## Info About the Component
Name: Strict Email Login
<br>
ID: StrictEmailLogin
<br>
Author: TheDoggyBrad / Arsalan Shah (lianglee)
<br>
Description: Allow only the user to login only with email, a Open Source Social Network component
<br>
License: OSSN v4 License
<br>
Author URL: https://github.com/thedoggybrad/StrictEmailLogin
<br>
License URL: https://www.opensource-socialnetwork.org/licence/v4.0.html
<br>
Component Version: 1.0
<br>
Requires: Version 5.6 (The earliest verified version that uses the same login system by me)
<br>
Tested up to: Version 7.0
<br>
A fork of: https://github.com/lianglee/EmailLogin (Discontinued, applied to OSSN Core)

### Note on the OSSN version requirement
It is possible to install this and make it work on older versions of OSSN, but I cannot gurantee that will work on those versions as I have not reviewed the code of those versions.
<br>
If you are brave to try on older versions of OSSN, feel free to change the ossn_com.xml file's requirement lower to meet your needs.

## The Story of Making this Component
This project was just a concept on my mind until I have thinked that Facebook does not allow login using usernames. This thread that I read on OSSN inspires me on making this component https://www.opensource-socialnetwork.org/discussion/view/2861/users-account-can-easily-be-hacked/ but I am not insipired for what the thread author calls a vulnerability but it is possible to really happen.
<br>
Then, I suddenly started doing the experiments on the original code by lianglee but I rather used the OSSN v7.0 code and copied it to MS Notepad.
<br>
Then, it fails and I resetted this component's development for 5 times. And deleted this repository 2 or 3 times (can't remember the exact count). I was hopeless for the sucess of this component.
<br>
Until, I discovered that I just need to remove the if statement related to the email part and the syntax closer "}" on the code and miraculously it works!



