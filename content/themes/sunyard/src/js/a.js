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

/*
* Document.Ready
*/

document.onreadystatechange = () => {
    if ( document.readyState === "complete" ) {
        const $body = document.getElementsByTagName( "body" )[ 0 ];
        const isHome = $body.classList.contains( "home" );

        if ( isHome ) {
            const $planeOne = document.getElementsByClassName( "plane-1" );
            const $planeTwo = document.getElementsByClassName( "plane-2" );
            const $planeThree = document.getElementsByClassName( "plane-3" );
            const $planeFour = document.getElementsByClassName( "plane-4" );
            window.onscroll = () => {
                // --> plane one
                parallax( {
                    $plane: $planeOne,
                    speed: 15,
                } );

                // --> plane two
                parallax( {
                    $plane: $planeTwo,
                    speed: 12,
                } );

                // --> plane three
                parallax( {
                    $plane: $planeThree,
                    speed: 6,
                } );

                // --> plane four
                parallax( {
                    $plane: $planeFour,
                    speed: 18,
                } );

                // --> plane five remains static
            };
        }
    }
};
