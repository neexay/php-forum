<?php
return array(
    //Запросы методом POST:

    'securiry/RegUser' => 'security/RegisterUser',
    'securiry/AuthUser' => 'security/AuthenticationUser',
    'security/EditProfileFirstName' => 'EditProfile/UpdateUserFirstName',
    'security/EditProfileLastName' => 'EditProfile/UpdateUserLastName',
    'security/EditProfileAbout' => 'EditProfile/UpdateUserAbout',
    'security/EditProfileEmail' => 'EditProfile/UpdateUserEmail',
    'questions/AddNewQuestion' => 'Questions/AddNewQuestion',
    'questions/AddNewAnswer' => 'Questions/AddNewAnswer',
    'security/logout' => 'security/Logout',

    //Запросы методом GET:

    //SecurityController
    'security/login' => 'security/SignIn',
    'security/reg' => 'security/SignUp',
    'security/profile' => 'security/Profile',
    'security/remind' => 'security/Remind',

    //QuestionsController
    'questions/ask' => 'questions/Ask',
    'questions/AllQuestions' => 'questions/AllQuestions',
    'questions/find' => 'questions/Find',
    'singleQuestion/id?' => 'questions/QuestionById',

    //NavigationController
    'navigation/tags' => 'navigation/Tags',
    'navigation/feedback' => 'navigation/Feedback',
    'navigation/support' => 'navigation/Support',
    '' => 'navigation/Main',
);
