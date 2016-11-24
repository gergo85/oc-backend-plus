# Backend toolkit plugin
This plugin extend the back-end to useful features, some new dashboard widgets, form widgets and front-end components.

- [Advantages of plugin](#advantages)
- [New back-end features](#new_features)
- [New menu in System panel](#new_menu)
- [New dashboard widgets](#dashboard_widgets)
- [New form widgets](#form_widgets)
- [New front-end components](#frontend_components)
- [Form widgets documentation](#documentation)
- [Available languages](#available_languages)
- [Installation](#installation)
- [Activate features](#activate_features)
- [Add widget](#add_widget)
- [Credits](#credits)

<a name="advantages"></a>
## Advantages of plugin
* __Increase the speed of your webpage!__ - Enable the gzip compression of server.
* __Delete the unused files and folders!__ - Scan and find the unnecessary elements.
* __Let's work effectively and quickly!__ - Extend the operation of input fields.
* __Be simpler the back-end interface!__ - Hide the unused elements and texts.
* __Make an informative nice dashboard!__ - Add some new widgets to dashboard.

<a name="new_features"></a>
## New back-end features
* __Enable the gzip compression.__ [More info &raquo;](https://developers.google.com/speed/docs/insights/EnableCompression)
* Hide the menu description in sidebar.
* __Focus the search field automatically.__
* Hide the search field in sidebar.
* __Rounded profile image is optional in top menu.__
* Show the virtual keyboard by input fields.
* __Hide the label in top menu.__
* Hide the "Find more themes" link in Design.
* __Show a right-click menu on Back-end.__
* Add the clear button to input fields.

<a name="new_menu"></a>
## New menu in System panel
__Delete the unused files and folders__ of OctoberCMS such as text files (readme and license), old files, empty folders and unnecessary database settings. You can find this feature on the __Settings > System > Trash items__ page. For compatibility reasons you can __use the latest version__ of OctoberCMS and plugins!

<a name="dashboard_widgets"></a>
## New dashboard widgets
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

<a name="form_widgets"></a>
## New form widgets
* __Pickadate__ (datepicker and timepicker)
* __TimePicki__ (timepicker)
* __MiniColors__ (colorpicker)

<a name="frontend_components"></a>
## New front-end components
* Lorem ipsum image
* Lorem ipsum text

<a name="documentation"></a>
## Form widgets documentation

### Pickadate
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

### TimePicki
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

### MiniColors
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

<a name="available_languages"></a>
## Available languages
* en - English
* de - Deutsch
* es - Español
* hu - Magyar
* tr - Türkçe

<a name="installation"></a>
## Installation
1. Go to the __Settings > Updates & Plugins__ page in the Backend.
1. Click on the __Install plugins__ button.
1. Type the __Backend Plus__ text in the search field.

<a name="activate_features"></a>
## Activate features
1. Go to the __Settings > Back-end preferences__ page in the Backend.
1. Click on the __Display__ or __Behavior__ tab.
1. You can __activate any new features__.

<a name="add_widget"></a>
## Add widget
1. Go to the __Dashboard__ page in the Backend.
1. Click on the __Manage widgets > Add widget__ button.
1. Select the any __Backend Plus widgets__ from the list.

<a name="credits"></a>
## Credits
* Context menu: [contextMenu](https://github.com/swisnl/jQuery-contextMenu)
* Clear button: [Add Clear](https://github.com/skorecky/Add-Clear)
* Virtual keyboard: [MLKeyboard](https://github.com/mBut/jquery.mlkeyboard)
* Random images: [lorempixel](http://lorempixel.com)
* Image slideshow: [Cycle2](https://github.com/malsup/cycle2)
* Datepicker: [Pickadate](http://amsul.ca/pickadate.js)
* Timepicker: [TimePicki](http://senthilraj.github.io/TimePicki)
* Colorpicker: [MiniColors](http://labs.abeautifulsite.net/jquery-minicolors)
