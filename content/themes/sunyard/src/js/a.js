/*

* parallax
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

function initParallax( ...args ) {
    args.forEach( ( arg ) => {
        parallax( {
            $plane: arg.$plane,
            speed: arg.speed,
        } );
    } );
}

/*
* Document.Ready
*/

document.onreadystatechange = () => {
    if ( document.readyState === "complete" ) {
        const $body = document.getElementsByTagName( "body" )[ 0 ];
        const isHome = $body.classList.contains( "home" );

        $body.classList.add( "fade" );

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
