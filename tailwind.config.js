const fs = require( 'fs' );
const path = require( 'path' );
const glob = require( 'glob' );

// Get arrays of all of the files.
const topLevelPhpFiles = glob.sync( './*.php' ),
	directoryFiles = [
		'./inc/*.php',
		'./template-parts/*.php',
		'./src/js/**/*.js',
	];

const themeJson = fs.readFileSync( './theme.json' );
const theme = JSON.parse( themeJson );
// const colors = theme.settings.custom.color.reduce( ( acc, item ) => {
// 	const [color, number] = item.slug.split( '-' );

// 	// If there is a number identifier, make this an object
// 	if(undefined !== number) {
// 		if ( !acc[color] ) {
// 			acc[color] = {}
// 		}
// 		acc[color][number] = item.color;
// 	} else{
// 		acc[color] = item.color;
// 	}

// 	return acc;
// }, {} );

const padding = theme.settings.spacing.spacingSizes.reduce( ( acc, item ) => {
	acc[ item.name ] = item.size;
	return acc;
}, {} );

const fontFamily = theme.settings.typography.fontFamilies.reduce(
	( acc, item ) => {
		acc[ item.slug ] = item.fontFamily;
		return acc;
	},
	{}
);

const fontSize = theme.settings.typography.fontSizes.reduce( ( acc, item ) => {
	acc[ item.slug ] = item.size;
	return acc;
}, {} );

module.exports = {
	corePlugins: {
		preflight: true,
	},
	content: topLevelPhpFiles.concat( directoryFiles ),
	theme: {
		screens: {
			sm: '640px',
			md: '768px',
			lg: '1042px',
			xl: '1262px',
			'2xl': '1300px',
		},
		colors: {
			transparent: 'transparent',
			current: 'currentColor',
			primary: 'var(--wp--preset--color--primary)',
			secondary: 'var(--wp--preset--color--secondary)',
			tertiary: 'var(--wp--preset--color--tertiary)',
			yellow: 'var(--wp--custom--color--yellow-light)',
			text: 'var(--wp--custom--color--gray-darkest)',
			blue: {
				light: 'var(--wp--custom--color--blue-light)',
				alt: 'var(--wp--custom--color--blue-alt)',
				DEFAULT: 'var(--wp--custom--color--blue)',
				dark: 'var(--wp--custom--color--blue-dark)',
				darkest: 'var(--wp--custom--color--blue-darkest)',
			},
			red: {
				lightest: 'var(--wp--custom--color--red-lightest)',
				light: 'var(--wp--custom--color--red-light)',
				DEFAULT: 'var(--wp--custom--color--red)',
				dark: 'var(--wp--custom--color--red-dark)',
				darkest: 'var(--wp--custom--color--red-darkest)',
			},
			gray: {
				lightest: 'var(--wp--custom--color--gray-lightest)',
				light: 'var(--wp--custom--color--gray-light)',
				DEFAULT: 'var(--wp--preset--color--gray)',
				dark: 'var(--wp--custom--color--gray-dark)',
				darkest: 'var(--wp--custom--color--gray-darkest)',
			},
			black: 'var(--wp--preset--color--black)',
			white: 'var(--wp--preset--color--white)',
			pink: 'var(--wp--custom--color--pink)',
		},
		fontFamily: {
			sans: [ '"DM Sans"', 'sans-serif' ],
			serif: [ '"Noto Serif"', 'serif' ],
			mono: [ '"IBM Plex Mono"', 'monospace' ],
			display: [ '"Inter"', 'sans-serif' ],
			body: [ '"DM Sans"', 'sans-serif' ],
			content: [ '"Source Sans Pro"', 'sans-serif' ],
			heading: [ '"DM Sans"', 'sans-serif' ],
			'post-heading': [ '"Noto Serif"', 'serif' ],
			'dm-sans': [ '"DM Sans"', 'sans-serif' ],
			'source-sans': [ '"Source Sans Pro"', 'sans-serif' ],
		},
		extend: {
			typography: ( { theme } ) => ( {
				DEFAULT: {
					css: {
						maxWidth: '100%',
					},
				},
			} ),
			fontSize: {
				...fontSize,
				tiny: '.75rem',
				'md-lg': '1.125rem',
				5: '1.25rem', //20px
				20: '1.25rem', //20px
				5.25: '1.3125rem', //21px
				21: '1.3125rem', //21px
				22: '1.375rem', //22px
				5.5: '1.375rem', //22px
				6: '1.5rem', //24px
				24: '1.5rem', //24px
				6.75: '1.6875rem', //27px
				27: '1.6875rem', //27px
				32: '2rem', //32px
				8: '2rem', //32px
			},
			fontFamily,
			colors: theme.settings.custom.color,
			spacing: {
				sm: '1rem',
				2.75: '.6875rem',
				5.5: '1.375rem', //22px
				7.5: '1.875rem', //30px
				12.5: '3.125rem', //50px
				15: '3.75rem', //60px
				32.5: '8.125rem', //130px
				33: '8.25rem', //132px
				34.5: '8.625rem', //138px
				50: '12.5rem', //200
				70: '17.5rem', //280px
				77.5: '19.375rem', //310px
				112: '28rem', //448px
				137.25: '34.3125rem', //549px
				175: '43.75rem', //700px
				549: '549px',
				700: '700px',
			},
			screens: {
				print: {
					raw: 'print',
				},
				screen: {
					raw: 'screen',
				},
			},
			gridTemplateColumns: {
				'5/7': 'calc( 100% * (5/12) ) calc( 100% * (7/12) -  4rem)',
			},
			textDecorationThickness: {
				6: '6px',
			},
			textUnderlineOffset: {
				10: '10px',
				12: '12px',
				14: '14px',
				16: '16px',
			},
			lineHeight: {
				12: '3rem',
				13: '3.5rem',
				14: '4rem',
				15: '4.5rem',
			},
			borderWidth: {
				DEFAULT: '1px',
				0: '0',
				2: '2px',
				3: '3px',
				4: '4px',
				5: '5px',
				6: '6px',
				7: '7px',
				8: '8px',
				9: '9px',
				10: '10px',
				12: '12px',
			},
			zIndex: {
				15: '15',
			},
		},
		container: {
			center: true,
		},
	},
	corePlugins: {
		preflight: false,
	},
	plugins: [
		require( 'tailwindcss-debug-screens' ),
		require( '@tailwindcss/forms' )( {
			strategy: 'class',
		} ),
	],
};
