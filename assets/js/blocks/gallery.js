// prettier-ignore
import { registerBlockVariation } from '@wordpress/blocks';
import { __ } from '@wordpress/i18n';

const NAMESPACE = `tvlr/group`;
const BLOCKNAME = 'core/gallery';

const variations = [
	{
		name: 'gallery-grid',
		title: __( 'Gallery Grid', 'tvlr' ),
		description: __( 'Arrange images in a grid.', 'tvlr' ),
		icon: 'grid-view',
		attributes: {
			namespace: NAMESPACE,
			className: 'grid',
			layout: {
				type: 'grid',
			},
		},
		scope: [ 'block', 'inserter', 'transform' ],
		isActive: ( attributes ) => {
			return attributes.layout?.type === 'grid';
		},
	},
];

variations.forEach( ( variation ) => {
	registerBlockVariation( BLOCKNAME, variation );
} );
