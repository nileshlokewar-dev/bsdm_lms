<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

		$data['header'] = '';
		$data['file_name'] = 'home/system_check';
		$data['footer'] = '';

		$this->load->view('dashboard', $data);
	}

	public function explorer()
	{
		$data['header'] = 'header';
		$data['file_name'] = 'home/wizard';
		$data['footer'] = 'footer';

		$this->load->view('dashboard', $data);
	}

	public function login(){

		$data['header'] = '';
		$data['file_name'] = 'home/login';
		$data['footer'] = '';

		$this->load->view('dashboard', $data);
	}

	public function course_selection(){
		
		$data['header'] = 'login_header';
		$data['file_name'] = 'home/select_course';
		$data['footer'] = '';

		$this->load->view('dashboard', $data);
	}

	public function chapter_one(){

		$data['header'] = 'login_header';
		$data['sidepanel'] = 'side_navigation_1';
		$data['file_name'] = 'home/learning-video_chapter1';
		$data['footer'] = '';

		$this->load->view('dashboard', $data);

	}
	
    public function get_last_played_time() {
        $video_id = $this->input->get('videoId');
        
        if (!$video_id) {
            echo json_encode(['error' => 'Video ID is required']);
            return;
        }

        $result = $this->Playback_model->get_last_played_time($video_id);
        $last_played_time = $result ? $result->last_played_time : 0;

        echo json_encode(['lastPlayedTime' => $last_played_time]);
    }

    public function save_last_played_time() {
        $input = json_decode($this->input->raw_input_stream, true);

        if (!isset($input['videoId']) || !isset($input['lastPlayedTime'])) {
            echo json_encode(['error' => 'Invalid input']);
            return;
        }

        $video_id = $input['videoId'];
        $last_played_time = $input['lastPlayedTime'];

        $this->Playback_model->save_last_played_time($video_id, $last_played_time);

        echo json_encode(['message' => 'Playback time saved successfully']);
    }


	public function chapter_one_completed(){
		$data['header'] = 'login_header';
		$data['sidepanel'] = 'side_navigation_1';
		$data['file_name'] = 'home/completed_chapter1';
		$data['footer'] = '';

		$this->load->view('dashboard', $data);
	}

	public function question($no){
		$data['header'] = 'login_header';
		$data['sidepanel'] = 'side_navigation_1';
		$data['file_name'] = 'home/chapter_one_question/question_'. $no;
		$data['footer'] = '';

		$this->load->view('dashboard', $data);
	}

	public function successfully_completed(){
		$data['header'] = 'login_header';
		$data['sidepanel'] = 'side_navigation_1';
		$data['file_name'] = 'home/chapter_one_question/successfully_completed';
		$data['footer'] = '';

		$this->load->view('dashboard', $data);
	}

	public function test_result(){
		$data['header'] = 'login_header';
		$data['sidepanel'] = 'side_navigation_1';
		$data['file_name'] = 'home/chapter_one_question/test_result';
		$data['footer'] = '';

		$this->load->view('dashboard', $data);
	}

	public function chapter_two(){

		$data['header'] = 'login_header';
		$data['sidepanel'] = 'side_navigation_2';
		$data['file_name'] = 'home/learning-video_chapter2';
		$data['footer'] = '';

		$this->load->view('dashboard', $data);

	}

	
	public function chapter_two_completed(){
		$data['header'] = 'login_header';
		$data['sidepanel'] = 'side_navigation_2';
		$data['file_name'] = 'home/completed_chapter2';
		$data['footer'] = '';

		$this->load->view('dashboard', $data);
	}

	public function question_2($no){
		$data['header'] = 'login_header';
		$data['sidepanel'] = 'side_navigation_2';
		$data['file_name'] = 'home/chapter_two_question/question_'. $no;
		$data['footer'] = '';

		$this->load->view('dashboard', $data);
	}

	public function successfully_completed_two(){
		$data['header'] = 'login_header';
		$data['sidepanel'] = 'side_navigation_2';
		$data['file_name'] = 'home/chapter_two_question/successfully_completed';
		$data['footer'] = '';

		$this->load->view('dashboard', $data);
	}

	public function test_result_two(){
		$data['header'] = 'login_header';
		$data['sidepanel'] = 'side_navigation_2';
		$data['file_name'] = 'home/chapter_two_question/test_result';
		$data['footer'] = '';

		$this->load->view('dashboard', $data);
	}

}
