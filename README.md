##Backend toolkit plugin for OctoberCMS
This plugin extend the backend to some new widgets, useful features and components.

###New features
* __Focus the search field automatically.__
* Hide the menu description in sidebar.
* __Rounded profile image is optional in top menu.__
* Show the virtual keyboard by input fields.
* __Add the clear button to input fields.__
* Hide the search field in sidebar.
* __Hide the Media menu in top menu.__
* Hide the "Find more themes" link in Design.
* __Delete the October demo plugin.__

###New widgets
* __System status plus (updates, plugins and themes)__
* Versions (cms, php and gd library)
* __RSS viewer (title, date and description)__
* Logs (event, access and request)
* __Cache storage (view diagram and delete files)__
* Random images (hundreds of high-quality photos)
* __Last logins (date, user name and ip address)__
* Administrators (users, groups and last login)
* __PHP settings (upload limit, memory limit and timezone)__
* Server info (host, ip address and operation system)

###New components
* Lorem ipsum image
* Lorem ipsum text

###New form widgets
* __Pickadate__ (datepicker and timepicker)
* __TimePicki__ (timepicker)

###Form widgets documentation

#####Pickadate
`pickadate` - renders a text field used for selecting date and times.

    date:
        label: Date
        type: pickadate
        mode: date

Option | Description
------------- | -------------
**mode** | the expected result, either date, datetime or time. Default: datetime.
**selectYears** | display select menus to pick the year. Default: false.
**selectMonths** | display select menus to pick the month. Default: false.
**interval** | choose the minutes interval between each time in the list. Default: 30.

See the demo: [http://amsul.ca/pickadate.js](http://amsul.ca/pickadate.js)

#####TimePicki
`timepicki` - renders a text field used for selecting times.

    time:
        label: Time
        type: timepicki
        stepSizeMinutes: 10
        
Option | Description
------------- | -------------
**increaseDirection** | set increase hour or minute direction. Default: 'down'.
**customClasses** | add custom class name in timepicki for our own like css purpose. Default: ''.
**minHourValue** | set minimum hour which means we can set minimum value of hour. Default: 0.
**maxHourValue** | also can set maximum hour same like minimum hour. Default: 23.
**showMeridian** | you can choose to hide the AM/PM selector. Default: false.
**stepSizeHours** | the step size with which hours have to increase or decrease Default: 1.
**stepSizeMinutes** | the step size with which hours have to increase or decrease Default: 1.
**overflowMinutes** | that hours will be updated if we go over the maximum/minimum of the minutes counter. Default: false.
**disableKeyboardMobile** | prevent keyboard to show up on mobile, side effect: you can't type your hour on desktop keyboard anymore either. Altering hours and minutes with arrows is still possible. Default: false.
**reset** | if want to reset time in input, to enable reset option. Default: false.

See the demo: [http://senthilraj.github.io/TimePicki](http://senthilraj.github.io/TimePicki)

###Available languages
* en - English
* de - Deutsch
* es - Español
* hu - Magyar
* tr - Türkçe

###Installation
1. Go to the __Settings > Updates__ page in Backend.
1. Click on the __Install Plugins__ button.
1. Type the __Backend Plus__ in search field.

###Activate features
1. Go to the __Settings > Back-end preferences__ page in Backend.
1. You can activate any new features.

###Add widget
1. Go to the __Dashboard__ page in Backend.
1. Click on the __Add widget__ button.
1. __Select__ the current widget from the list.

###Credits
* Clear button: [Add Clear](https://github.com/skorecky/Add-Clear)
* Virtual keyboard: [MLKeyboard](https://github.com/mBut/jquery.mlkeyboard)
* Random images: [lorempixel](http://lorempixel.com)
* Image slideshow: [Cycle2](https://github.com/malsup/cycle2)
* Datepicker: [Pickadate](http://amsul.ca/pickadate.js)
* Timepicker: [TimePicki](http://senthilraj.github.io/TimePicki)
