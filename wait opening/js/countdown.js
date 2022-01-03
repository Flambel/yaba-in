/*
* Theme Name: Rudermann Countdown
* Theme URI: http://themes.tvda.eu
* Description: Countdown
* Author: Evgeny Kostritsa and TVDA
* Author URI: http://themes.tvda.eu
* Version: 1.0
*/

$(function()
{
    var countDownClock = 
    {
	    iniClock: function (date)
		{  
		    // calculating days, hours, minutes and seconds to date.
		    date = date.split(':');
		    toDate = new Date(date[0], date[1]-1, date[2], date[3], date[4], date[5]);

		    var currentDate = new Date();
		        dateDif = toDate - currentDate;
		        daysCount = ('0000' + Math.abs(Math.floor((dateDif)/(1000*60*60*24)))).slice(-4),
		        hoursCount = ('00' + Math.abs(Math.floor(date[3] - currentDate.getHours()))).slice(-2),
		        minuteCount = ('00' + Math.abs(Math.floor(date[4]-currentDate.getMinutes()))).slice(-2),
		        secondCount = ('00' + Math.abs(Math.floor(date[5]-currentDate.getSeconds()))).slice(-2),
		        ticksCount = Math.round(dateDif/1000);
		        
		    if (date[3] - currentDate.getHours() < 0)
		    {
		        hoursCount = ('00' + (24 - parseInt(hoursCount))).slice(-2); 
		    }
		    if (date[4] - currentDate.getMinutes() < 0)
		    {
		        hoursCount = ('00' + (parseInt(hoursCount) - 1)).slice(-2);
		        minuteCount = ('00' + (60 - parseInt(minuteCount))).slice(-2); 
		        if (hoursCount < 0)
		        {
    		        hoursCount = ('00' + (24 + parseInt(hoursCount))).slice(-2); 
		        }
		        
		    }
		    if (date[5] - currentDate.getSeconds() < 0)
		    {
		        minuteCount = ('00' + (parseInt(minuteCount - 1))).slice(-2);
		        secondCount = ('00' + (60 - parseInt(secondCount))).slice(-2); 
		        if (minuteCount < 0)
		        {
    		        hoursCount = ('00' + (parseInt(hoursCount) - 1)).slice(-2);
    		        minuteCount = ('00' + (60 + parseInt(minuteCount))).slice(-2);  
		        }
		        if (hoursCount < 0)
		        {
    		        hoursCount = ('00' + (24 + parseInt(hoursCount))).slice(-2); 
		        }
		    }
		    
		    var second = secondCount.charAt(1),
        		tenSecond = secondCount.charAt(0),
        		minute = minuteCount.charAt(1),
        		tenMinute = minuteCount.charAt(0),
        		hour = hoursCount.charAt(1),
        		tenHour = hoursCount.charAt(0),
        		day = daysCount.charAt(3),
        		tenDay = daysCount.charAt(2),
        		hunDay = daysCount.charAt(1),
        		thosDay = daysCount.charAt(0),
        		secondBefore = second - 1,
        		tenSecondBefore = tenSecond - 1,
        		minuteBefore = minute - 1,
        		tenMinuteBefore = tenMinute - 1,
        		hourBefore = hour - 1,
        		tenHourBefore = tenHour - 1,
        		dayBefore = day - 1,
        		tenDayBefore = tenDay - 1,
        		hunDayBefore = hunDay - 1,
        		thosDayBefore = thosDay - 1,
        		container = $('<div class="container"></div>'),
        		dayContainer = $('<div class="day-container sepr"></div>'),
        		thosDayBlk = $('<ul class="flip days thosdayPlay">'),
        		hunDayBlk = $('<ul class="flip days hundayPlay">'),
        		tenDayBlk = $('<ul class="flip days tendayPlay">'),
        		dayBlk = $('<ul class="flip days dayPlay">'),
        		tenHourBlk = $('<ul class="flip tenhourPlay">'),
        		hourBlk = $('<ul class="flip hourPlay sepr">')
        		tenMinuteBlk = $('<ul class="flip tenminutePlay">'),
        		minuteBlk = $('<ul class="flip minutePlay sepr">')
        		tenSecondBlk = $('<ul class="flip tensecondPlay">'),
        		secondBlk = $('<ul class="flip secondPlay">'),
        		itemTmp = '<li>\
                            <a href="#">\
                                <div class="up">\
                                    <div class="shadow"></div>\
                                    <div class="inn">{{num}}</div>\
                                </div>\
                                <div class="down">\
                                    <div class="shadow"></div>\
                                    <div class="inn">{{num}}</div>\
                                </div>\
                            </a>\
                        </li>';
            if (dateDif < 0)
		    {
    		    second = tenSecond = minute = tenMinute = hour = tenHour = day = tenDay = hunDay = thos = 0;
		    }
                        
    		if (second <= 0)
        		secondBefore = 9;
        	if (tenSecond <= 0)
        		tenSecondBefore = 5;
            if (minute <= 0)
        		minuteBefore = 9;
            if (tenMinute <= 0)
        		tenMinuteBefore = 5;
            if (hour <= 0)
        		hourBefore = 5;
            if (tenHour <= 0)
        		tenHourBefore = 2;
            if (day <= 0)
        		dayBefore = 9;
            if (tenDay <= 0)
        		tenDayBefore = 9;
            if (hunDay <= 0)
        		hunDayBefore = 9;
            if (thosDay <= 0)
        		thosDayBefore = 9;
		    
		    // building html sctructure
		    $('.countDownClock').append(container);
		    dayContainer.prependTo(container).append(dayBlk).append(tenDayBlk).append(hunDayBlk).append(thosDayBlk);
		    for (var i = 0, flip = dayContainer.find('.flip'); i < flip.length; i++) 
		    {
		        var curFlip = flip.eq(i);
		        for (var j = 9; j >= 0; j--)
		        {
		            curFlip.append(Mustache.to_html(itemTmp, {num : j}));
		        }
		    }
		    container.append(tenHourBlk);
		    for (var j = 2; j >= 0; j--)
	        {
	            tenHourBlk.append(Mustache.to_html(itemTmp, {num : j}));
	        }
		    container.append(hourBlk);
		    for (var j = 9; j >= 0; j--)
	        {
	            hourBlk.append(Mustache.to_html(itemTmp, {num : j}));
	        }
		    for (var j = 3; j >= 0; j--)
	        {
	            hourBlk.append(Mustache.to_html(itemTmp, {num : j}));
	        }
	        container.append(tenMinuteBlk);
		    for (var j = 5; j >= 0; j--)
	        {
	            tenMinuteBlk.append(Mustache.to_html(itemTmp, {num : j}));
	        }
		    container.append(minuteBlk);
		    for (var j = 9; j >= 0; j--)
	        {
	            minuteBlk.append(Mustache.to_html(itemTmp, {num : j}));
	        }
	        container.append(tenSecondBlk);
		    for (var j = 5; j >= 0; j--)
	        {
	            tenSecondBlk.append(Mustache.to_html(itemTmp, {num : j}));
	        }
		    container.append(secondBlk);
		    for (var j = 9; j >= 0; j--)
	        {
	            secondBlk.append(Mustache.to_html(itemTmp, {num : j}));
	        }
	        
	        //setting timer
    		$('.countDownClock .flip.secondPlay li:nth-child(' + (10 - secondBefore) + ')').addClass('pre-before');
    		$('.countDownClock .flip.secondPlay li:nth-child(' + (10 - second) + ')').addClass('pre-active');
    		$('.countDownClock .flip.tensecondPlay li:nth-child(' + (6 - tenSecondBefore) + ')').addClass('pre-before');
    		$('.countDownClock .flip.tensecondPlay li:nth-child(' + (6 - tenSecond) + ')').addClass('pre-active');
    		$('.countDownClock .flip.minutePlay li:nth-child(' + (10 - minuteBefore) + ')').addClass('pre-before');
    		$('.countDownClock .flip.minutePlay li:nth-child(' + (10 - minute) + ')').addClass('pre-active');
    		$('.countDownClock .flip.tenminutePlay li:nth-child(' + (6 - tenMinuteBefore) + ')').addClass('pre-before');
    		$('.countDownClock .flip.tenminutePlay li:nth-child(' + (6 - tenMinute) + ')').addClass('pre-active');
    		$('.countDownClock .flip.hourPlay li:nth-child(' + (10 - hourBefore) + ')').addClass('pre-before');
    		$('.countDownClock .flip.hourPlay li:nth-child(' + (10 - hour) + ')').addClass('pre-active');
    		$('.countDownClock .flip.tenhourPlay li:nth-child(' + (3 - tenHourBefore) + ')').addClass('pre-before');
    		$('.countDownClock .flip.tenhourPlay li:nth-child(' + (3 - tenHour) + ')').addClass('pre-active');
    		$('.countDownClock .flip.dayPlay li:nth-child(' + (10 - dayBefore) + ')').addClass('pre-before');
    		$('.countDownClock .flip.dayPlay li:nth-child(' + (10 - day) + ')').addClass('pre-active');
    		$('.countDownClock .flip.tendayPlay li:nth-child(' + (10 - tenDayBefore) + ')').addClass('pre-before');
    		$('.countDownClock .flip.tendayPlay li:nth-child(' + (10 - tenDay) + ')').addClass('pre-active');
    		$('.countDownClock .flip.hundayPlay li:nth-child(' + (10 - hunDayBefore) + ')').addClass('pre-before');
    		$('.countDownClock .flip.hundayPlay li:nth-child(' + (10 - hunDay) + ')').addClass('pre-active');
    		$('.countDownClock .flip.thosdayPlay li:nth-child(' + (10 - thosDayBefore) + ')').addClass('pre-before');
    		$('.countDownClock .flip.thosdayPlay li:nth-child(' + (10 - thosDay) + ')').addClass('pre-active');

    		// hide days-blk if 0
            if (thosDay == 0) 
    		{ 
    		    container.css(
    		      'width', container.width() - dayBlk.width() - (parseInt(dayBlk.css('margin')) * 2)
    		    );
    		    thosDayBlk.hide();
            }
            if (hunDay == 0 && thosDay == 0) 
    		{ 
    		    container.css(
    		      'width', container.width() - dayBlk.width() - (parseInt(dayBlk.css('margin')) * 2)
    		    );
    		    hunDayBlk.hide();
            }
            if (tenDay == 0 && thosDay == 0 && hunDay == 0) 
    		{
    		    container.css(
    		      'width', container.width() - dayBlk.width() - (parseInt(dayBlk.css('margin')) * 2)
    		    );
    		    tenDayBlk.hide();
            }
            if (day == 0 && thosDay == 0 && hunDay == 0 && tenDay == 0)
    		{
    		    container.css(
    		      'width', container.width() - dayBlk.width() - (parseInt(dayBlk.css('margin')) * 2)
    		    );
    		    dayBlk.hide(); 
    		    dayContainer.hide();
            }
    		
    		if (dateDif > 0)
		    {
    		    clockTick = setInterval(function () 
        		{
        		    ticksCount--;
        		    if (ticksCount >= 0)
                        countDownClock.countChange(secondBlk);
                    else
                    { 
                        if ($('.countDownClock .secondPlay .active .inn').html() != '0')
                            countDownClock.countChange(secondBlk);
                        else
                            clearInterval(clockTick);
                    }
                }, 1000);
		    }
    		
		},

        
        countChange : function(flip) 
        {
            $("body").removeClass("play");
            var aa = flip.find('li.active')
                
            if (aa.html() == undefined) 
            {
                aa = flip.find("li.pre-active");
                aa.removeClass('pre-active');
                flip.find("li.pre-before").removeClass('pre-before');
            }
            
            if (aa.parent().hasClass('hourPlay') && aa.is(":nth-child(10)")) 
            {
                var bb = flip.prev().find('li.active');
                if (bb.html() == undefined)
                    bb = flip.prev().find('li.pre-active');
                $(".countDownClock ul.hourPlay li").removeClass("before");
                aa.addClass("before").removeClass("active");
                if (bb.is(":last-child")) {
                    aa = $(".countDownClock ul.hourPlay li").eq(10);
                }
                else
                {
                    aa = $(".countDownClock ul.hourPlay li").eq(0);
                }
                aa.addClass("active")
                    .closest("body")
                    .addClass("play");
                
                //some shit to find prev-clock-block
                prevFlip = flip.prev();
                if (!prevFlip.hasClass('flip') && prevFlip.length > 0)
                    prevFlip = prevFlip.prev('');

                if (prevFlip.length > 0)
                    countDownClock.countChange(prevFlip);
            }
            else if (aa.is(":last-child")) 
            {
                flip.find('li').removeClass("before");
                aa.addClass("before").removeClass("active");
                aa = flip.find("li").eq(0);
                aa.addClass("active")
                    .closest("body")
                    .addClass("play");
                
                //some shit to find prev-clock-block
                if (flip.hasClass('days'))
                {
                    prevFlip = flip.next();
                }
                else
                {
                    prevFlip = flip.prev();
                    if (prevFlip.hasClass('day-container'))
                    {
                        prevFlip = prevFlip.find('.flip.dayPlay');
                    }
                }

                if (prevFlip.length > 0)
                    countDownClock.countChange(prevFlip);
                
            }
            else 
            {
                flip.find('li').removeClass("before");
                aa.addClass("before")
                    .removeClass("active")
                    .next("li")
                    .addClass("active")
                    .closest("body")
                    .addClass("play");
            }
        }
    }  
    
    countDownClock.iniClock($('.countDownClock').attr('data-to-date')); // YYYY:MM:DD:hh:mm:ss
});