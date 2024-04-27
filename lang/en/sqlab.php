<?php
// Strings for the component 'mod_sqlab', language 'en'.

// General Module Information
$string['sqlab'] = 'SQLab';
$string['pluginname'] = 'SQLab';
$string['modulename'] = 'SQLab';
$string['modulenameplural'] = 'SQLabs';
$string['pluginadministration'] = 'SQLab Administration';

// Status and Navigation
$string['nosqlabs'] = 'No SQLab instances';
$string['state'] = 'Status';
$string['inprogress'] = 'In progress';
$string['finished'] = 'Finished';
$string['overdue'] = 'Overdue';
$string['previouspage'] = 'Previous page';
$string['nextpage'] = 'Next page';
$string['returntoattempt'] = 'Return to attempt';

// User Interaction
$string['attempt'] = 'Attempt';
$string['continueattempt'] = 'Continue last attempt';
$string['startnewattempt'] = 'Start a new attempt';
$string['previousattempts'] = 'Previous attempts';
$string['finishattempt'] = 'Finish attempt...';
$string['submitandfinish'] = 'Submit all and finish';

// Question and Answer Management
$string['question'] = 'Question';
$string['saved'] = 'Saved answer';
$string['notsaved'] = 'Not yet answered';
$string['questionnavtittle'] = 'Question navigation';
$string['noresponseprovided'] = '-- No response has been provided';
$string['userresponsereview'] = 'Your answer';
$string['solutionreview'] = 'Solution';

// Permissions and Roles
$string['sqlab:addinstance'] = 'Add a new SQLab';
$string['sqlab:view'] = 'View SQLab';
$string['sqlab:manage'] = 'Manage SQLab';
$string['sqlab:attempt'] = 'Allow the user to attempt the SQLab activity';

// Grading and Attempts
$string['attemptsummary'] = 'Summary of the attempt';
$string['gradesummary'] = '<strong>{$a->obtained}</strong> out of {$a->total} (<strong>{$a->percentage}</strong>%)';
$string['gradereview'] = 'Grade: {$a->usergrade}/{$a->totalgrade}';
$string['permittedattempts'] = 'Allowed attempts: ';
$string['unlimitedattempts'] = 'Unlimited attempts.';
$string['grade'] = 'Grade';

// Errors and System Messages
$string['invalidcoursemodule'] = 'The activity you are trying to access does not exist. Please contact support if the issue persists.';
$string['invalidcourseid'] = 'The course you are trying to access does not exist. Please contact support if the issue persists.';
$string['invalidattemptid'] = 'The attempt you are trying to access does not exist or is no longer available. If you believe this is an error, please contact support.';
$string['missingparam'] = 'Some necessary information is missing. Please contact support if the issue persists.';
$string['missingparameters'] = 'Some required parameters are missing. Please check your input and try again.';
$string['invalidrequestmethod'] = 'The request method is not supported for this endpoint. Please use POST.';
$string['errorprocessattempt'] = 'An error occurred while processing your attempt. Please try again or contact support if the problem persists.';
$string['noattemptid'] = 'No attempt ID was provided. Please contact support if the issue persists.';
$string['notyourattempt'] = 'You do not have permission to access this attempt. If you believe this is an error, please contact support.';
$string['invalidsqlabid'] = 'The SQLab activity you are trying to access does not exist or has been deleted. If you believe this is an error, please contact support.';
$string['noquestionsfound'] = 'No questions found for this SQLab activity. Please contact support if you believe this is an error.';
$string['noquestionid'] = 'No question ID was provided. Please contact support if the issue persists.';
$string['questionnotfound'] = 'The requested question could not be found. It may have been removed or is temporarily unavailable. Please contact support if the issue persists.';
$string['nomoreattempts'] = 'You have reached the maximum number of attempts for this activity.';
$string['nosqlcode'] = 'No SQL code was provided. Please contact support if the issue persists.';
$string['noevaluate'] = 'Evaluation parameter is missing. Please contact support if the issue persists.';

// Configuration and Setup
$string['quizid'] = 'Quiz ID';
$string['quizid_help'] = 'Retrieving the ID of the Quiz with SQL questions';
$string['quizid_help_help'] = 'To properly configure SQLab, you need to enter the ID of a Quiz with SQL questions that you want SQLab to use. Each quiz has a unique ID associated with it. This ID is essential for SQLab to find and load the SQL questions you want to use.';
$string['submissionperiod'] = 'Submission period';
$string['startdate'] = 'Available from';
$string['duedate'] = 'Submission deadline';

// Security and Access Control
$string['securitysettings'] = 'Security';
$string['activitypassword'] = 'Activity password';
$string['sqlabpasswordrequired'] = 'To access this SQLab you need to know the password.';
$string['passwordmodaltitle'] = 'Password';
$string['enterpassword'] = 'Please enter the password to continue:';
$string['closemodalpassword'] = 'Close';
$string['sendpassword'] = 'Continue';
$string['passwordincorrect'] = 'Incorrect password.';
$string['passwordempty'] = 'Please enter a password.';
$string['unexpectederror'] = 'An unexpected error occurred.';
$string['ajaxerror'] = 'AJAX request error.';

// Reviews and Feedback
$string['review'] = 'Review';
$string['reviewlinktext'] = 'Review attempt';
$string['startedon'] = 'Started on';
$string['completedon'] = 'Completed on';
$string['timetaken'] = 'Time taken';
$string['reviewgrade'] = 'Grade';
$string['finishreview'] = 'Finish review';
$string['feedbackreview'] = 'Feedback';

// Activity Interface Customization
$string['name'] = 'Activity name';
$string['editorthemes'] = 'Editor themes';
$string['fontsize'] = 'Font size';
$string['runcode'] = 'Run code';
$string['evaluatecode'] = 'Evaluate code';
$string['beforefinish'] = 'Use "Run code" to test your answers without affecting your assessment. Press "Evaluate code" to have your runs saved as final answers to each question. Only the last run per question will be considered for evaluation.';
$string['scoresas'] = 'Score as';
$string['sqlresults'] = 'Expected results';
$string['relatedconcepts'] = 'Related concepts';
$string['hints'] = 'Hints';
