<?php
class Playback_model extends CI_Model {

    public function get_last_played_time($video_id) {
        $this->db->where('video_id', $video_id);
        $query = $this->db->get('video_playback');
        return $query->row();
    }

    public function save_last_played_time($video_id, $last_played_time) {
        $data = [
            'video_id' => $video_id,
            'last_played_time' => $last_played_time,
            'updated_at' => date('Y-m-d H:i:s')
        ];

        // Check if the record exists
        $this->db->where('video_id', $video_id);
        $query = $this->db->get('video_playback');

        if ($query->num_rows() > 0) {
            // Update existing record
            $this->db->where('video_id', $video_id);
            $this->db->update('video_playback', $data);
        } else {
            // Insert new record
            $this->db->insert('video_playback', $data);
        }
    }
}
