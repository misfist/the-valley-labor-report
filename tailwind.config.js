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

const fontFamily = theme.settings.typography.fontFamilies.reduce(
	( acc, item ) => {
		acc[ item.slug ] = item.fontFamily;
		return acc;
	},
	{}
);

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
					sm: '100%',
					md: '100%',
					lg: '100%',
					xl: '1280px',
					'2xl': '1280px',
				},
			},
			screens: {
				xs: '264px',
				sm: '600px',
			},
			fontFamily: {
				...fontFamily,
				sans: [ 'var( --wp--preset--font-family--sans )' ],
				serif: [ 'var( --wp--preset--font-family--serif )' ],
				heading: [ 'var( --wp--preset--font-family--sans )' ],
				mono: [ 'var( --wp--preset--font-family--mono )' ],
				display: [ 'var( --wp--preset--font-family--display )' ],
				body: [ 'var( --wp--preset--font-family--work-sans )' ],
			},
			colors: {
				...colors,
				'black/10': 'rgba( 0, 0, 0, 0.1 )',
				'black/20': 'rgba( 0, 0, 0, 0.2 )',
				'black/30': 'rgba( 0, 0, 0, 0.3 )',
				'black/40': 'rgba( 0, 0, 0, 0.4 )',
				'black/50': 'rgba( 0, 0, 0, 0.5 )',
				'black/60': 'rgba( 0, 0, 0, 0.6 )',
				'black/70': 'rgba( 0, 0, 0, 0.7 )',
				'black/80': 'rgba( 0, 0, 0, 0.8 )',
				'black/90': 'rgba( 0, 0, 0, 0.9 )',
				'white/10': 'rgba( 255, 255, 255, 0.1 )',
				'white/20': 'rgba( 255, 255, 255, 0.2 )',
				'white/30': 'rgba( 255, 255, 255, 0.3 )',
				'white/40': 'rgba( 255, 255, 255, 0.4 )',
				'white/50': 'rgba( 255, 255, 255, 0.5 )',
				'white/60': 'rgba( 255, 255, 255, 0.6 )',
				'white/70': 'rgba( 255, 255, 255, 0.7 )',
				'white/80': 'rgba( 255, 255, 255, 0.8 )',
				'white/90': 'rgba( 255, 255, 255, 0.9 )',
			},
			margin: {
				alignfull: 'calc(50% - 50vw)',
			},
		},
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
	plugins: [ require( '@tailwindcss/typography' ), require( 'daisyui' ) ],
};
