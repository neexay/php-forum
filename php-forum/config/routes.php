<?php
return array(

    //Запросы методом POST:

    'securiry/RegUser'=> 'security/RegisterUser',
    'securiry/AuthUser'=> 'security/AuthenticationUser',
    'security/EditProfileFirstName'=> 'editprofile/UpdateUserFirstName',
    'security/EditProfileLastName'=> 'editprofile/UpdateUserLastName',
    'security/EditProfileAbout'=> 'editprofile/UpdateUserAbout',
    'security/EditProfileEmail'=> 'editprofile/UpdateUserEmail',
    'questions/AddNewQuestion'=> 'Questions/AddNewQuestion',
    'questions/AddNewAnswer'=> 'Questions/AddNewAnswer',
    'security/logout'=> 'security/Logout',


    //Запросы методом GET:

    //SecurityController
    'security/login' => 'security/SignIn',
    'security/reg' => 'security/SignUp',
    'security/profile' => 'security/Profile',
    'security/remind' => 'security/Remind',

    //QuestionsController
    'questions/ask' => 'questions/Ask',
    'singleQuestion/id?' => 'questions/QuestionById',

    //NavigationController
    'navigation/tags' => 'navigation/Tags',
    'navigation/feedback' => 'navigation/Feedback',
    '' => 'navigation/Main',


);

