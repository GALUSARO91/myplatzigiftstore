import {registerBlockType} from '@wordpress/blocks';

registerBlockType(
    'pg/basic',
    {
        title: "Basick Block",
        description: "Este es nuestro primer bloque",
        icon: "smiley",
        category: "layout",
        edit: () => <h2>Hello WOrld</h2>,
        save: () => <h2>Hello WOrld</h2>,
    }
)