##Backend toolkit plugin
This plugin extend the backend to some new dashboard widgets, form widgets, useful features and front-end components.

###New back-end features
* __Focus the search field automatically.__
* Hide the menu description in sidebar.
* __Rounded profile image is optional in top menu.__
* Show the virtual keyboard by input fields.
* __Add the clear button to input fields.__
* Hide the search field in sidebar.
* __Uninstall the October Demo plugin.__
* Hide the "Find more themes" link in Design.

###New dashboard widgets
* __System status plus (updates, plugins and themes)__
* Versions (CMS, PHP and GD library)
* __RSS viewer (title, date and description)__
* Logs (event, access and request)
* __Cache storage (view diagram and delete files)__
* Random images (hundreds of high-quality photos)
* __Last logins (date, user name and IP address)__
* Administrators (users, groups and last login)
* __PHP settings (upload limit, memory limit and timezone)__
* Server info (host, IP address and operation system)

###New form widgets
* __Pickadate__ (datepicker and timepicker)
* __TimePicki__ (timepicker)
* __MiniColors__ (colorpicker)

###New front-end components
* Lorem ipsum image
* Lorem ipsum text

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

#####MiniColors
`minicolors` - renders controls to select a color value.

    theme:
        label: Choose color
        type: minicolors
        control: wheel

Option | Description
------------- | -------------
**animationSpeed** | the animation speed of the sliders when the user taps or clicks a new color. Default: 50.
**animationEasing** | the easing to use when animating the sliders. Default: 'swing'.
**changeDelay** | the time, in milliseconds, to defer the change event from firing while the user makes a selection. Default: 0.
**control** | determines the type of control. Valid options are 'hue', 'brightness', 'saturation', and 'wheel'. Default: 'hue'.
**format** | the format MiniColors should use. Valid options are 'hex' and 'rgb'. Default: 'hex'.
**hideSpeed** | the speed at which to hide the color picker. Default: 100.
**keywords** | a comma-separated list of keywords that the control should accept (e.g. inherit, transparent, initial). Default: ''.
**letterCase** | determines the letter case of the hex code value. Valid options are 'uppercase' or 'lowercase'. Default: 'lowercase'.
**position** | sets the position of the dropdown. Valid options are 'bottom left', 'bottom right', 'top left', and 'top right'. Default: 'bottom left'.
**showSpeed** | the speed at which to show the color picker. Default: 100.

See the demo: [http://labs.abeautifulsite.net/jquery-minicolors](http://labs.abeautifulsite.net/jquery-minicolors)

###Available languages
* en - English
* de - Deutsch
* es - Español
* hu - Magyar
* tr - Türkçe

###Installation
1. Go to the __Settings > Updates & Plugins__ page in the Backend.
1. Click on the __Install plugins__ button.
1. Type the __Backend Plus__ text in the search field.

###Activate features
1. Go to the __Settings > Back-end preferences__ page in the Backend.
1. You can __activate any new features__.

###Add widget
1. Go to the __Dashboard__ page in the Backend.
1. Click on the __Manage widgets > Add widget__ button.
1. Select the any __Backend Plus widgets__ from the list.

###Credits
* Clear button: [Add Clear](https://github.com/skorecky/Add-Clear)
* Virtual keyboard: [MLKeyboard](https://github.com/mBut/jquery.mlkeyboard)
* Random images: [lorempixel](http://lorempixel.com)
* Image slideshow: [Cycle2](https://github.com/malsup/cycle2)
* Datepicker: [Pickadate](http://amsul.ca/pickadate.js)
* Timepicker: [TimePicki](http://senthilraj.github.io/TimePicki)
* Colorpicker: [MiniColors](http://labs.abeautifulsite.net/jquery-minicolors)
