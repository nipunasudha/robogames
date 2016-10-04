/*

JQUERY: STOPWATCH & COUNTDOWN

This is a basic stopwatch & countdown plugin to run with jquery. Start timer, pause it, stop it or reset it. Same behaviour with the countdown besides you need to input the countdown value in seconds first. At the end of the countdown a callback function is invoked.

Any questions, suggestions? marc.fuehnen(at)gmail.com

*/
var time_value;
var submit_allowed=true;
var data_team;
var data_round;
var data_attempt;
$(document).ready(function() {

    (function($) {

        $.extend({

            APP: {

                formatTimer: function(a) {
                    if (a < 10) {
                        a = '0' + a;
                    }
                    return a;
                },

                startTimer: function(dir) {

                    var a;

                    // save type
                    $.APP.dir = dir;

                    // get current date
                    $.APP.d1 = new Date();

                    switch ($.APP.state) {

                        case 'pause':

                            // resume timer
                            // get current timestamp (for calculations) and
                            // substract time difference between pause and now
                            $.APP.t1 = $.APP.d1.getTime() - $.APP.td;

                            break;

                        default:

                            // get current timestamp (for calculations)
                            $.APP.t1 = $.APP.d1.getTime();

                            // if countdown add ms based on seconds in textfield
                            if ($.APP.dir === 'cd') {
                                $.APP.t1 += parseInt($('#cd_seconds').val()) * 1000;
                            }

                            break;

                    }

                    // reset state
                    $.APP.state = 'alive';
                    $('#' + $.APP.dir + '_status').html('Running');

                    // start loop
                    $.APP.loopTimer();

                },

                pauseTimer: function() {

                    // save timestamp of pause
                    $.APP.dp = new Date();
                    $.APP.tp = $.APP.dp.getTime();

                    // save elapsed time (until pause)
                    $.APP.td = $.APP.tp - $.APP.t1;

                    // change button value
                    $('#' + $.APP.dir + '_start').val('Resume');

                    // set state
                    $.APP.state = 'pause';
                    $('#' + $.APP.dir + '_status').html('Paused');

                },

                stopTimer: function() {

                    // change button value
                    $('#' + $.APP.dir + '_start').val('Restart');

                    // set state
                    $.APP.state = 'stop';
                    $('#' + $.APP.dir + '_status').html('Stopped');

                },

                resetTimer: function() {

                    // reset display
                    $('#' + $.APP.dir + '_ms,#' + $.APP.dir + '_s,#' + $.APP.dir + '_m,#' + $.APP.dir + '_h').html('00');

                    // change button value
                    $('#' + $.APP.dir + '_start').val('Start');

                    // set state
                    $.APP.state = 'reset';
                    $('#' + $.APP.dir + '_status').html('Timer Standby');

                },

                endTimer: function(callback) {

                    // change button value
                    $('#' + $.APP.dir + '_start').val('Restart');

                    // set state
                    $.APP.state = 'end';

                    // invoke callback
                    if (typeof callback === 'function') {
                        callback();
                    }

                },

                loopTimer: function() {

                    var td;
                    var d2, t2;

                    var ms = 0;
                    var s = 0;
                    var m = 0;
                    var h = 0;

                    if ($.APP.state === 'alive') {

                        // get current date and convert it into 
                        // timestamp for calculations
                        d2 = new Date();
                        t2 = d2.getTime();

                        // calculate time difference between
                        // initial and current timestamp
                        if ($.APP.dir === 'sw') {
                            td = t2 - $.APP.t1;
                            // reversed if countdown
                        } else {
                            td = $.APP.t1 - t2;
                            if (td <= 0) {
                                // if time difference is 0 end countdown
                                $.APP.endTimer(function() {
                                    $.APP.resetTimer();
                                    $('#' + $.APP.dir + '_status').html('Ended & Reset');
                                });
                            }
                        }

                        // calculate milliseconds
                        ms = td % 1000;
                        if (ms < 1) {
                            ms = 0;
                        } else {
                            // calculate seconds
                            s = (td - ms) / 1000;
                            if (s < 1) {
                                s = 0;
                            } else {
                                // calculate minutes   
                                var m = (s - (s % 60)) / 60;
                                if (m < 1) {
                                    m = 0;
                                } else {
                                    // calculate hours
                                    var h = (m - (m % 60)) / 60;
                                    if (h < 1) {
                                        h = 0;
                                    }
                                }
                            }
                        }

                        // substract elapsed minutes & hours
                        ms = Math.round(ms / 100);
                        s = s - (m * 60);
                        m = m - (h * 60);

                        // update display
                        $('#' + $.APP.dir + '_ms').html($.APP.formatTimer(ms));
                        $('#' + $.APP.dir + '_s').html($.APP.formatTimer(s));
                        $('#' + $.APP.dir + '_m').html($.APP.formatTimer(m));
                        $('#' + $.APP.dir + '_h').html($.APP.formatTimer(h));
                        time_value = $.APP.formatTimer(m) + ":" + $.APP.formatTimer(s) + ":" + $.APP.formatTimer(ms)
                            // loop
                        $.APP.t = setTimeout($.APP.loopTimer, 1);

                    } else {

                        // kill loop
                        clearTimeout($.APP.t);
                        return true;

                    }

                }

            }

        });

        $('#sw_start').on('click', function() {
            $.APP.startTimer('sw');
            $('#sw_start').hide()
            $('#sw_stop').show()
            $('#sw_pause').show()
            $('#sw_reset').show()
            $('#sw_save').hide()

        });

        $('#sw_stop').on('click', function() {
            $.APP.stopTimer();
            $('#sw_start').show()
            $('#sw_stop').hide()
            $('#sw_pause').hide()
            $('#sw_reset').show()
            $('#sw_save').show()

            $('#myModal').modal('show')
            submit_allowed=true







            // $.ajax({
            //     type: "POST",
            //     url: "insertTime.php",
            //     data: {
            //         time:time_value
            //     },
            //     success: function(resultData){
            //         console.log('added to the daatabase');
            //         console.log(resultData);
            //     }
            // });
        });

        $('#sw_reset').on('click', function() {
            $.APP.resetTimer();
            $('#sw_start').show()
            $('#sw_stop').hide()
            $('#sw_pause').hide()
            $('#sw_reset').show()
            $('#sw_save').hide()
        });

        $('#sw_pause').on('click', function() {
            $.APP.pauseTimer();
            $('#sw_start').show()
            $('#sw_stop').show()
            $('#sw_pause').hide()
            $('#sw_reset').show()
            $('#sw_save').hide()
        });

    })(jQuery);

});


//========================= MODAL ==============================
$('#sw_save').on('click', function() {
    $('#myModal').modal('show')
})
$('#myModal').modal({

    backdrop: 'static',
    show: false

})

$('#myModal').on('show.bs.modal', function(event) {
    // var button = $(event.relatedTarget)  Button that triggered the modal
    // var recipient = button.data('whatever')  Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.counter-value').text(time_value)

})

$('.modal-submit').on('click', function() {
    data_team=$('#team-selector').val()
    data_round=$('#round-selector').val()
    data_attempt=$('#attempt-selector').val()
//alert(data_team+"\n"+data_round+"\n"+data_attempt+"\n"+time_value);
   if(submit_allowed){
       submit_allowed=false
        $.ajax({
        type: "POST",
        url: "insertTime.php",
        data: {
            time: time_value,
            team:data_team,
            round:data_round,
            attempt:data_attempt

        },
        success: function(resultData) {
            console.log('added to the daatabase');
            window.location='scoreboard.php'
        }
    });
    
   }
})