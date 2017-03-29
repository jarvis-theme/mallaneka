<!DOCTYPE html>
<html lang="en">
    <head>
        {{ Theme::partial('seostuff') }}
        {{ Theme::partial('defaultcss') }}
        {{ Theme::asset()->styles() }}
    </head>
    <body>
        <div class="global-wrapper clearfix" id="global-wrapper">
            {{ Theme::partial('header') }}
            <div class="clearfix"></div>
            {{ Theme::partial('slider') }}
            <div class="gap"></div>
            {{ Theme::place('content') }}
            <div class="gap"></div>
            {{ Theme::partial('footer') }}
            <span class="totop">
                <a href="#"><i class="icon-chevron-up"></i></a>
            </span> 
            {{ Theme::partial('defaultjs') }}
            {{ Theme::asset()->scripts() }}
            {{ Theme::asset()->container('footer')->scripts() }}
            {{ Theme::partial('analytic') }}
        </div>
    </body>
</html>