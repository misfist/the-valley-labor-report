const fs = require( 'fs' );
const path = require( 'path' );
const glob = require( 'glob' );

// Get arrays of all of the files.
const topLevelPhpFiles = glob.sync( './*.php' ),
	directoryFiles = [
		'./inc/*.php',
		'./template-parts/*.php',
		'./assets/js/**/*.js',
	];

const themeJsonPath = path.join( __dirname, 'theme.json' );
const themeJson = fs.readFileSync( themeJsonPath );
const theme = JSON.parse( themeJson );

const { palette } = theme.settings.color;
const colors = palette.reduce( ( acc, item ) => {
	const [ color, number ] = item.slug.split( '-' );

	if ( number ) {
		// If there is a number identifier, make this an object
		if ( ! acc[ color ] ) {
			acc[ color ] = {};
		}
		acc[ color ][ number ] = item.color;
	} else {
		acc[ color ] = item.color;
	}

	return acc;
}, {} );

module.exports = {
	corePlugins: {
		preflight: false,
	},
	content: topLevelPhpFiles.concat( directoryFiles ),
	theme: {
		container: {
			center: true,
			padding: '2rem',
		},
		extend: {
			container: {
				screens: {
					'sm': '100%',
					'md': '100%',
					'lg': '100%',
					'xl': '1280px',
					'2xl': '1280px'
				}
			},
			colors,
		}
	},
	daisyui: {
		themes: [
			{
				tvlr: {
					primary: '#B93434',
					secondary: '#000000',
					accent: '#D9D9D9',
					neutral: '#2d1f01',
					'base-100': '#ffffff',
					info: '#D9D9D9',
					success: '#009e6d',
					warning: '#fcbd23',
					error: '#B93434',
				},
			},
		],
	},
	plugins: [ 
		require( '@tailwindcss/typography' ),
		require( 'daisyui' )
	],
};
