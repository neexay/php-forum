<?php
return array(
    //SecurityController
    'security/login' => 'security/SignIn',
    'security/reg' => 'security/SignUp',
    'security/profile' => 'security/Profile',
    'security/remind' => 'security/Remind',

    //QuestionsController
    'questions/ask' => 'questions/Ask',
    'questions/id([0-9]+)' => 'questions/QuestionById',

    //NavigationController
    'navigation/tags' => 'navigation/Tags',
    'navigation/feedback' => 'navigation/Feedback',
    '' => 'navigation/Main',

);

