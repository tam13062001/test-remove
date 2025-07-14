import { useBlockProps, MediaUpload, InspectorControls } from '@wordpress/block-editor';
import { Button, PanelBody, SelectControl, TextControl } from '@wordpress/components';
import { Fragment } from '@wordpress/element';

const Edit = ({ attributes, setAttributes }) => {
  const { title, breadcrumbs, background_image, type } = attributes;

  const updateBreadcrumb = (value: string, index: number) => {
    const updated = [...breadcrumbs];
    updated[index] = value;
    setAttributes({ breadcrumbs: updated });
  };

  const addBreadcrumb = () => setAttributes({ breadcrumbs: [...breadcrumbs, 'New Item'] });
  const removeBreadcrumb = (index: number) => {
    const updated = breadcrumbs.filter((_, i) => i !== index);
    setAttributes({ breadcrumbs: updated });
  };

  return (
    <Fragment>
      <InspectorControls>
        <PanelBody title="Background Settings" initialOpen>
          <SelectControl
            label="Background Type"
            value={type}
            options={[
              { label: 'Image', value: 'image' },
              { label: 'Video', value: 'video' }
            ]}
            onChange={(val) => setAttributes({ type: val })}
          />
          <MediaUpload
            onSelect={(media) => setAttributes({ background_image: media.url })}
            allowedTypes={type === 'image' ? ['image'] : ['video']}
            render={({ open }) => (
              <Button onClick={open} variant="primary">
                {background_image ? 'Change Background' : 'Select Background'}
              </Button>
            )}
          />
        </PanelBody>
      </InspectorControls>

      <div {...useBlockProps()} className="datum-hero-block p-4 bg-gray-100">
        <TextControl
          label="Title"
          value={title}
          onChange={(val) => setAttributes({ title: val })}
        />

        <div>
          <strong>Breadcrumbs</strong>
          {breadcrumbs.map((crumb, index) => (
            <div key={index} style={{ display: 'flex', gap: '10px', marginBottom: '5px' }}>
              <TextControl
                value={crumb}
                onChange={(val) => updateBreadcrumb(val, index)}
              />
              <Button variant="secondary" onClick={() => removeBreadcrumb(index)}>Remove</Button>
            </div>
          ))}
          <Button variant="primary" onClick={addBreadcrumb}>Add Breadcrumb</Button>
        </div>
      </div>
    </Fragment>
  );
};

export default Edit;
