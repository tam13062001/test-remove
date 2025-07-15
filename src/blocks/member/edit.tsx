// edit.tsx
import {
  useBlockProps,
  MediaUpload,
  MediaUploadCheck
} from '@wordpress/block-editor';
import {
  TextControl,
  Button,
  PanelBody
} from '@wordpress/components';
import { Fragment } from '@wordpress/element';

export default function Edit({ attributes, setAttributes }) {
  const {title, teams, defaultActiveKey, emptyMessage } = attributes;
  const safeTeams = Array.isArray(teams) ? teams : [];

  const updateTeamField = (teamIndex, field, value) => {
    const newTeams = [...safeTeams];
    newTeams[teamIndex][field] = value;
    setAttributes({ teams: newTeams });
  };

  const updateMember = (teamIndex, memberIndex, field, value) => {
    const newTeams = [...safeTeams];
    const members = [...(newTeams[teamIndex].members || [])];
    members[memberIndex][field] = value;
    newTeams[teamIndex].members = members;
    setAttributes({ teams: newTeams });
  };

  const addTeam = () => {
    setAttributes({
      teams: [...safeTeams, { groupName: 'New Group', members: [] }]
    });
  };

  const addMember = (teamIndex) => {
    const newTeams = [...safeTeams];
    const team = newTeams[teamIndex];
    team.members = [...(team.members || []), {
      name: '',
      role: '',
      image_url: ''
    }];
    setAttributes({ teams: newTeams });
  };

  const removeTeam = (index) => {
    const newTeams = [...safeTeams];
    newTeams.splice(index, 1);
    setAttributes({ teams: newTeams });
  };

  const removeMember = (teamIndex, memberIndex) => {
    const newTeams = [...safeTeams];
    const team = newTeams[teamIndex];
    team.members.splice(memberIndex, 1);
    setAttributes({ teams: newTeams });
  };

  return (
    <div {...useBlockProps()}>
      <TextControl
        label="Title"
        value={title}
        onChange={(value) => setAttributes({ title: value })}
      />

      <TextControl
        label="Default Active Tab"
        value={defaultActiveKey}
        onChange={(val) => setAttributes({ defaultActiveKey: val })}
      />

      <TextControl
        label="Empty message"
        value={emptyMessage}
        onChange={(val) => setAttributes({ emptyMessage: val })}
      />

      <h3>Các nhóm:</h3>
      {safeTeams.map((team, teamIndex) => (
        <Fragment key={teamIndex}>
          <PanelBody title={`Nhóm ${team.groupName}`} initialOpen={true}>
            <TextControl
              label="Tên nhóm"
              value={team.groupName}
              onChange={(val) => updateTeamField(teamIndex, 'groupName', val)}
            />
            <Button
              onClick={() => addMember(teamIndex)}
              variant="secondary"
              style={{ marginBottom: '10px' }}
            >
              + Thêm thành viên
            </Button>
            {team.members?.map((member, memberIndex) => (
              <div key={memberIndex} style={{ border: '1px solid #ccc', padding: 10, marginBottom: 10 }}>
                <TextControl
                  label="Tên"
                  value={member.name}
                  onChange={(val) => updateMember(teamIndex, memberIndex, 'name', val)}
                />
                <TextControl
                  label="Chức vụ"
                  value={member.role}
                  onChange={(val) => updateMember(teamIndex, memberIndex, 'role', val)}
                />
                <div style={{ marginBottom: '10px' }}>
                  <strong>Ảnh đại diện</strong>
                  <MediaUploadCheck>
                    <MediaUpload
                      onSelect={(media) => updateMember(teamIndex, memberIndex, 'image_url', media.url)}
                      allowedTypes={['image']}
                      render={({ open }) => (
                        <>
                          {member.image_url && (
                            <img
                              src={member.image_url}
                              alt={member.name || 'Ảnh thành viên'}
                              style={{ width: 120, height: 'auto', marginBottom: 8, borderRadius: 4 }}
                            />
                          )}
                          <Button onClick={open} variant="secondary">
                            {member.image_url ? 'Thay ảnh' : 'Chọn ảnh'}
                          </Button>
                        </>
                      )}
                    />
                  </MediaUploadCheck>
                </div>
                <Button
                  isDestructive
                  onClick={() => removeMember(teamIndex, memberIndex)}
                  variant="link"
                >
                  Xoá thành viên
                </Button>
              </div>
            ))}
            <Button
              isDestructive
              onClick={() => removeTeam(teamIndex)}
              variant="link"
            >
              Xoá nhóm
            </Button>
          </PanelBody>
        </Fragment>
      ))}
      <Button onClick={addTeam} variant="primary" style={{ marginTop: '10px' }}>
        + Thêm nhóm
      </Button>
    </div>
  );
}