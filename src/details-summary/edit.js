/**
 * WordPress dependencies
 */
import { RichText, useBlockProps } from '@wordpress/block-editor';
import { __ } from '@wordpress/i18n';

/**
* Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
* All files containing `style` keyword are bundled together. The code used
* gets applied both to the front of your site and to the editor.
*
* @see https://www.npmjs.com/package/@wordpress/scripts#using-css
*/
import './editor.scss';

function Edit( { attributes, setAttributes } ) {
	const summary = attributes.summary ? attributes.summary : __( 'Details' );
	return (
		<summary
			{ ...useBlockProps() }
			onClick={ ( event ) => event.preventDefault() }
		>
			<RichText
				aria-label={ __( 'Add summary' ) }
				allowedFormats={ [] }
				withoutInteractiveFormatting
				value={ summary }
				onChange={ ( newSummary ) =>
					setAttributes( { summary: newSummary } )
				}
			/>
		</summary>
	);
}

export default Edit;
