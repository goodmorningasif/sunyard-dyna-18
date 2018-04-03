/*
* parallax
*
* sets up logic for elmovements
*
*/

const parallax = ( {
    $plane,
    speed,
} = {} ) => {
    Array.prototype.forEach.call( $plane, ( $el ) => {
        const elBox = $el.getBoundingClientRect();
        const mutate = elBox.top / speed;
        $el.setAttribute( "style", `transform: translateX(0) translateY(${ mutate }px)` );
    } );
};

/*
* initParallax
*
* initializes arguments for parallax
*
*/
function initParallax( ...args ) {
    args.forEach( ( arg ) => {
        parallax( {
            $plane: arg.$plane,
            speed: arg.speed,
        } );
    } );
}

/*
* slideShow
*
* sets up gallery logic
*
*/
const slideShow = {
    indx: 0,
    timer: 60,
    pause: false,
    slides: [],
    start( target, timer = 6000 ) {
        const $gallery = document.getElementsByClassName( target )[ 0 ];
        const $bttnRight = document.getElementById( `${ target }-right` );
        const $bttnLeft = document.getElementById( `${ target }-left` );

        this.timer = timer;
        this.slides = $gallery.children;

        $bttnRight.addEventListener( "click", ( e ) => {
            e.preventDefault();
            this.onClick( "right" );
        } );
        $bttnLeft.addEventListener( "click", ( e ) => {
            e.preventDefault();
            this.onClick( "left" );
        } );
        this.changeSlide();
        this.countDown();
    },
    changeSlide() {
        Array.prototype.forEach.call( this.slides, ( slide, indx ) => {
            if ( indx > this.indx ) this.addFade( slide );
            else this.removeFade( slide );
        } );
    },
    resetSlides() {
        Array.prototype.forEach.call( this.slides, ( slide ) => {
            slide.classList.remove( "fade" );
        } );
    },
    removeFade( slide ) {
        slide.classList.remove( "fade" );
    },
    addFade( slide ) {
        slide.classList.add( "fade" );
    },
    onClick( direction ) {
        switch ( direction ) {
        case "left":
            this.setPause();
            this.prev();
            this.changeSlide();
            break;
        case "right":
            this.setPause();
            this.next();
            this.changeSlide();
            break;
        default:
            this.changeSlide();
        }
    },
    next() {
        this.indx += 1;
        this.checkIndx();
    },
    prev() {
        this.indx -= 1;
        this.checkIndx();
    },
    checkIndx() {
        if ( this.indx < 0 ) {
            this.indx = this.slides.length - 1;
        } else if ( this.indx > this.slides.length - 1 ) {
            this.indx = 0;
        }
    },
    setPause( pauseTime = 6000 ) {
        if ( !this.pause ) {
            this.pause = true;
            setTimeout( () => {
                this.pause = false;
            }, pauseTime );
        }
    },
    resetTime( time = 6000 ) {
        this.timer = time;
    },
    spendTime() {
        this.timer -= 1000;
    },
    countDown() {
        if ( this.timer === 0 ) {
            this.next();
            this.changeSlide();
            this.resetTime();
        } else if ( !this.pause ) {
            this.spendTime();
        }
        setTimeout( this.countDown.bind( this ), 1000 );
    },
};

/*
* Document.Ready
*/
document.onreadystatechange = () => {
    if ( document.readyState === "complete" ) {
        const $body = document.getElementsByTagName( "body" )[ 0 ];
        const isHome = $body.classList.contains( "home" );
        const $gallery = document.getElementsByClassName( "gal-1" );

        $body.classList.add( "fade" );
        if ( $gallery.length > 0 ) slideShow.start( "gal-1" );

        if ( isHome ) {
            const $planeOne = document.getElementsByClassName( "plane-1" );
            const $planeTwo = document.getElementsByClassName( "plane-2" );
            const $planeThree = document.getElementsByClassName( "plane-3" );
            const $planeFour = document.getElementsByClassName( "plane-4" );

            initParallax( {
                $plane: $planeOne,
                speed: 15,
            }, {
                $plane: $planeTwo,
                speed: 12,
            }, {
                $plane: $planeThree,
                speed: 6,
            }, {
                $plane: $planeFour,
                speed: 18,
            } );

            window.onscroll = () => {
                initParallax( {
                    $plane: $planeOne,
                    speed: 15,
                }, {
                    $plane: $planeTwo,
                    speed: 12,
                }, {
                    $plane: $planeThree,
                    speed: 6,
                }, {
                    $plane: $planeFour,
                    speed: 18,
                } );
            };
        }
    }
};
