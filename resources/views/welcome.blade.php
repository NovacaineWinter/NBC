@extends('layouts.outside')

@section('content')
    <div id="homepage-top-content-holder" style="visibility:hidden;">
        <div class="JS-Sized" id="homepage-top-images">
            <div class="JS-Sized" id="home-top-largeimage">
                <h1 id="headerTitle">Our Range of Luxury Boats</h1>
                <div class="white-btn btn" id="explorebutton" style="position:absolute">
                    <h2>Explore Now</h2>
                </div>
            </div>
            <div class="JS-Sized rightside" id="home-top-right-top">
                <div class="hoverreveal fullsize rightfullsize">
                    <div class="descriptionHolder">
                        <p>Because buying a boat is about more than just a purchase, it is a change of lifestyle.</p>
                        <br>
                        <div class="btn white-btn" style="color:#fafafa">Find Out More</div>
                    </div>
                </div>
                <h2 class="righttitles">Lifestyle</h2>
            </div>
            <div class="JS-Sized rightside" id="home-top-right-bottom">
                <div class="hoverreveal fullsize rightfullsize">
                    <div class="descriptionHolder">
                        <p>Find out about our relentless persuit of quality through the use of precision technologies.</p>
                    </div>
                </div>
                <h2 class="righttitles">Technology</h2>
            </div>
        </div>
        <div class="JS-Sized" id="homepage-top-signup"><h3 style="text-align: center;">Sign Up to our Newsletter</h3><input style="    margin-left: 845px;
    width: 200px;
    margin-top: 20px;" type="email" name="email" id="emailInput"></div>    
    </div>
    <div id="footer">
        
        All the other shit <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>

<script>
    //stuff to do with positioning
    $(document).ready(function() {
        resizeContent();
    });

    function resizeContent(){
        $('#homepage-top-content-holder').css('visibility','visible');
        topContentSize = $(window).height() - $('#header-total-size').height();
        $('#homepage-top-content-holder').height(topContentSize);

        signupHeight = 150;
        imageSectionHeight = topContentSize-signupHeight;

        $('#homepage-top-signup').height(signupHeight);
        

        squareDimensions = (imageSectionHeight/2)-1;

        rightWidth = $(window).width() * 0.25;
        $('#home-top-right-top').height(squareDimensions);
        $('#home-top-right-top').width(rightWidth);

        $('#home-top-right-bottom').height(squareDimensions);
        $('#home-top-right-bottom').width(rightWidth);

        $('.rightfullsize').height(squareDimensions);
        $('.rightfullsize').width(rightWidth);


        largeImageWidth = ( $(window).width() -rightWidth) -1;
        $('#home-top-largeimage').height(imageSectionHeight);
        $('#home-top-largeimage').width(largeImageWidth);

        topoffset = imageSectionHeight - 26+ $('#header-total-size').height() - $('#explorebutton').height() - 30;
        rightoffset = rightWidth + 2 + 30;
        $('#explorebutton').css('top', topoffset);
        $('#explorebutton').css('right',rightoffset);
    }

    $(window).resize(resizeContent);

    $('.rightside').hover(function() {
        var rightfullsizes = $('.rightfullsize');
        $(this).find(rightfullsizes).css('display','flex').hide(1).fadeIn(250); 
    });

    $('.rightside').mouseleave(function() {
        var rightfullsizes = $('.rightfullsize');
        $(this).find(rightfullsizes).css('display','none').fadeOut(1); 
    });
</script>



@endsection


@section('navBar_li')
    <li><a href="" >Home</a></li>
    <li><a href="" >Our Range</a></li>
    <li><a href="" >Technology</a></li>
    <li><a href="" >Lifestyle</a></li>
    <li><a href="" >Sailaways</a></li>
    <li><a href="" >Contact</a></li>
@endsection

@section('tabTitle')
    Nottingham Boat Co LTD
@endsection