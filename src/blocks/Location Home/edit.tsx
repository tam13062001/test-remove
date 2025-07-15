import { useBlockProps } from '@wordpress/block-editor';
import { TextControl, Button } from '@wordpress/components';
import { Fragment } from '@wordpress/element';

export default function Edit({ attributes, setAttributes }: any) {
  const { title, description, markers, markers_ipad, markers_mobile } = attributes;

  const updateMarker = (list: string, index: number, field: string, value: string) => {
    const current = [...attributes[list]];
    current[index][field] = value;
    setAttributes({ [list]: current });
  };

  const addMarker = (list: string) => {
    const current = [...attributes[list]];
    current.push({ name: '', x: '', y: '' });
    setAttributes({ [list]: current });
  };

  return (
    <div {...useBlockProps()}>
      <TextControl
        label="Translation key tiêu đề"
        value={title}
        onChange={(val) => setAttributes({ title: val })}
      />
      <TextControl
        label="Translation key mô tả"
        value={description}
        onChange={(val) => setAttributes({ description: val })}
      />

      <h3 className="mt-5 font-bold">Markers (Desktop)</h3>
      {markers.map((m: any, i: number) => (
        <Fragment key={i}>
          <TextControl label="Tên" value={m.name} onChange={(val) => updateMarker('markers', i, 'name', val)} />
          <TextControl label="X" value={m.x} onChange={(val) => updateMarker('markers', i, 'x', val)} />
          <TextControl label="Y" value={m.y} onChange={(val) => updateMarker('markers', i, 'y', val)} />
        </Fragment>
      ))}
      <Button onClick={() => addMarker('markers')} isSecondary>+ Thêm marker desktop</Button>

      <h3 className="mt-5 font-bold">Markers (iPad)</h3>
      {markers_ipad.map((m: any, i: number) => (
        <Fragment key={i}>
          <TextControl label="Tên" value={m.name} onChange={(val) => updateMarker('markers_ipad', i, 'name', val)} />
          <TextControl label="X" value={m.x} onChange={(val) => updateMarker('markers_ipad', i, 'x', val)} />
          <TextControl label="Y" value={m.y} onChange={(val) => updateMarker('markers_ipad', i, 'y', val)} />
        </Fragment>
      ))}
      <Button onClick={() => addMarker('markers_ipad')} isSecondary>+ Thêm marker iPad</Button>

      <h3 className="mt-5 font-bold">Markers (Mobile)</h3>
      {markers_mobile.map((m: any, i: number) => (
        <Fragment key={i}>
          <TextControl label="Tên" value={m.name} onChange={(val) => updateMarker('markers_mobile', i, 'name', val)} />
          <TextControl label="X" value={m.x} onChange={(val) => updateMarker('markers_mobile', i, 'x', val)} />
          <TextControl label="Y" value={m.y} onChange={(val) => updateMarker('markers_mobile', i, 'y', val)} />
        </Fragment>
      ))}
      <Button onClick={() => addMarker('markers_mobile')} isSecondary>+ Thêm marker mobile</Button>
    </div>
  );
}
