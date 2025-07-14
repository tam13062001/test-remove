import { useBlockProps } from '@wordpress/block-editor';
import {
  TextControl,
  Button,
  PanelBody,
  PanelRow
} from '@wordpress/components';
import { Fragment } from '@wordpress/element';

export default function Edit({ attributes, setAttributes }) {
  const { title, description, markers = [] } = attributes;

  const updateMarker = (index, key, value) => {
    const updated = [...markers];
    updated[index][key] = value;
    setAttributes({ markers: updated });
  };

  const addMarker = () => {
    setAttributes({
      markers: [...markers, { name: '', x: '0%', y: '0%' }]
    });
  };

  const removeMarker = (index) => {
    const updated = markers.filter((_, i) => i !== index);
    setAttributes({ markers: updated });
  };

  const blockProps = useBlockProps();

  return (
    <div {...blockProps}>
      <TextControl
        label="Translation Key - Title"
        value={title}
        onChange={(val) => setAttributes({ title: val })}
      />
      <TextControl
        label="Translation Key - Description"
        value={description}
        onChange={(val) => setAttributes({ description: val })}
      />

      <PanelBody title="Markers" initialOpen>
        {markers.map((marker, index) => (
          <Fragment key={index}>
            <PanelRow>
              <TextControl
                label={`Name #${index + 1}`}
                value={marker.name}
                onChange={(val) => updateMarker(index, 'name', val)}
              />
            </PanelRow>
            <PanelRow>
              <TextControl
                label="X Position (%)"
                value={marker.x}
                onChange={(val) => updateMarker(index, 'x', val)}
              />
              <TextControl
                label="Y Position (%)"
                value={marker.y}
                onChange={(val) => updateMarker(index, 'y', val)}
              />
            </PanelRow>
            <Button
              variant="link"
              isDestructive
              onClick={() => removeMarker(index)}
            >
              Xoá marker
            </Button>
            <hr />
          </Fragment>
        ))}
        <Button variant="primary" onClick={addMarker}>
          + Thêm marker
        </Button>
      </PanelBody>
    </div>
  );
}
