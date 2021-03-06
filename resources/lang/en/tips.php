<?php

return [
    'none' => 'Currently there are no personal tips for you',
    'education-programs' => 'Education programs',
    'education-programs-all' => 'All programs',
    'views' => 'Views',
    'active' => 'Active',
    'tips' => 'Tips',
    'create-new' => 'Create new tip',
    'edit' => 'Edit tip',
    'all-tips' => 'All tips',
    'this-tip-statistics' => 'Statistics of tip',
    'add-statistic' => 'Add statistic',
    'to-tip' => 'Go to tip',
    'name' => 'Name',
    'ep-type' => 'Education program type',
    'statistics-count' => 'Statistics',
    'condition' => 'Condition',
    'like' => 'Like tip',
    'liked' => 'You have liked this tip!',
    'likes' => 'Likes',
    'new' => 'New tip',
    'new-statistic-driven' => 'New statistic tip',
    'new-moment-driven' => 'New moment tip',
    'moment-trigger' => 'Moment trigger',
    'moment-trigger-detail' => 'Enter the period in which this tip will be active. For example, start at 10% of the workplace learning period until 20%. Multiple coupled moments allow the tip to become active more than once during a workplace learning period, for example at the beginning (0% and 20%) and at the end (80% and 100%). When more than one moment is coupled only one needs to be active to make the moments part of the tip active.',
    'rangeStart' => 'Start boundary',
    'rangeEnd' => 'End boundary',
    'type-moment' => 'Moment',
    'new-moment' => 'New moment',
    'couple-moment' => 'Couple new moment',
    'create' => 'Create',
    'or' => 'or',
    'percentage-period' => 'Between :percentage of learning period',
    'type-statistic' => 'Statistic',
    'back' => 'Back to index',
    'coupled-statistics' => 'Coupled statistics',
    'couple-statistic' => 'Couple a statistic',
    'coupling-statistics' => 'Coupling statistics',
    'tiptext' => 'Tip text',
    'delete-confirm' => 'Are you sure you want to completely delete this tip?',

    'save' => 'Save',
    'cancel' => 'Cancel',
    'decouple' => 'Decouple',
    'statistics' => 'Statistics',

    'form' => [
        'cohorts-enable-all' => 'Select all cohorts',
        'cohorts-disable-all' => 'Deselect all cohorts',
        'name' => 'Tip name',
        'selecting-statistic' => 'Select statistic',
        'threshold' => 'The threshold value for this statistic. E.g. 40%, fill in 0.4. For non-percentage values fill in whole number.',
        'tipText' => 'Text of the tip. Use the value parameters below (:statistic-x) to mark where the calculated statistic values should be placed.',
        'tipTextPlaceholder' => ':statistic-1 of your activities you do alone.',
        'showInAnalysis' => 'Should the tip be visible in the analysis?',
        'statistic' => 'Statistic for calculation',
        'enabledCohorts' => 'Select the cohorts that should use this tip',
        'cohorts-enable' => 'Select cohorts',
        'save' => 'Save',
        'save-statistic-and-again' => 'Save & add another statistic',
        'save-statistic-and-continue' => 'Save & continue',
        'submit' => 'Create',
        'next-step' => 'Next step',
        'comparison-operator' => 'Comparison',
        'statistic-value-parameters' => 'Value parameters for this tip. Value name parameters are only in use with "predefined" statistics. Then these parameters are for example the name of the most often occuring category.',
        'table-statistic' => 'Statistic',
        'table-value-parameter' => 'Value parameter (e.g. 20%)',
        'table-value-name-parameter' => 'Value name parameter (e.g. category)',
        'moment-value-parameters' => 'The calculated percentage of days into the workplace learning period, e.g. 23%, can be used in the tip text by writing :days-percentage.',
    ],
    'help-steps' => [
        'guide' => 'Guide',
        'back' => 'Back',
        'close' => 'Close',
        'last' => 'Last',
        'next' => 'Next',
        'skip' => 'Skip',

        '1' => 'Set the name of the tip. This is only visible to you, not the students.',
        '2' => 'Click here to couple a statistic to this tip.',
        '3' => 'Let\'s create a new statistic.',
        '4' => 'First pick a name for the new statistic.',
        '5' => 'Select which type of learning activities should be used.',
        '6' => 'Select whether the calculation should be done with the amount of activities or the total hour sum of the activities. Note, only producing statistics can use the hours option.',
        '7' => 'Now define the filters. For example only activities with the Resource Person "Alone".',
        '8' => 'Tip!, You can put multiple values in a filter by separating them with " || ". For example "Alone || Supervisor".',
        '9' => 'Select the type of calculation, for example a division (/).',
        '10' => 'Now define the filters for the second variable. If you don\'t want any filters here just leave them empty.',
        '11' => 'Create the statistic!',
        '12' => 'Now select the statistic.',
        '13' => 'Select the type of comparison that should be done; greater than or less than.',
        '14' => 'Define the threshold that activates the statistic.',
        '15' => 'Now couple the statistic to the tip.',
        '16' => 'The statistic is now coupled to the tip!',
        '17' => 'Here you can define when during the learning period the tip can be active. For example only during the beginning. If it is always allowed to be active, just continue to the next step!',
        '18' => 'Now define the tip text that will be shown to a student if the tip is applicable. You can insert the calculated values of the statistics by using ":statistic-*" in the text. The * corresponds to the number of the statistic. These numbers can be found in the table.',
        '19' => 'Set whether or not this tip should be shown to students/',
        '20' => 'Select the cohorts that will use this tip.',
        '21' => 'Now as the final step, save the tip.',
    ],

    'help' => [
        'help' => 'Help',
        'how-does-it-work' => 'How does it work?',
        'explain-tips' => 'Tips can help students at their workplace. These tips have to be created here first. A tip will be shown to a student if the tip is considered active. There are to types of tips: statistic driven tips, and moment driven tips. A statistic tip is considered active if one or more of its calculated statistics pass a configured threshold and become active. If more than one statistic is coupled they all need to be active before the tip is considered active. A moment driven tip becomes active if the student\'s workplace learning period is, for example, completed for 25% to 35%.',
        'explain-statistics' => 'A statistic is calculated with two learning activities. These variables have a value, either the total amount of learning activities for the student or the total sum of the hours of the learning activities. These variables can also be filtered by their attributes. It is for example possible to filter the first variable by the Resource Person attribute, setting it to "Alone", and leaving the filters for the second variable empty. The calculation will then give the percentage of learning activities with the resource person "Alone".',
        'explain-couple' => 'Statistics that have been created still need to be coupled to a tip. For this it is also necessary to configure the condition for when a statistic is considered active. For example when you want the statistic to be active when 50% of the learning activities are done alone you would enter 0.5 as the threshold and put the comparison on "greater than".',
        'explain-moment' => 'A moment is defined by a start boundary and an end boundary. Together they define when a moment is considered active. For example, filling in 25% and 35% means that the tip is active when the student is between 25% and 35% into his or her workplace learning period.',
        'explain-tiptext' => 'The tip text is the text shown to the student. For a statistic tip, it is possible to insert the calculated statistic values by writing ":statistic-*" where * is the number of the statistic. This way a student can know what the percentage of work done "Alone" is and if necessary adjust his or her work. If the tip is a moment tip write ":days-percentage" to insert the days into the workplace learning period as a percentage.',
        'explain-footer' => 'To better understand the tips workflow it is possible to follow an interactive guide. For this first create a new tip and then click the "Guide" button in the top right corner of the webpage.',
    ],

    'see-more' => 'Want to see more tips or an analysis, click here',
    'personal-tip' => 'Personal tip',
    'moments' => 'Moments',
];
