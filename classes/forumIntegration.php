<?php

class forumIntegration {

	private function createConnection() {
		$communityUrl = 'http://localhost/forum/api/index.php?';
		$apiKey = 'caffe3410e89c8de39f4e0aaa80979a9';
		$curl = curl_init( $communityUrl . '/forums/topics&sortBy=date&sortDir=desc' );
		curl_setopt_array( $curl, array(
			CURLOPT_RETURNTRANSFER	=> TRUE,
			CURLOPT_HTTPAUTH	=> CURLAUTH_BASIC,
			CURLOPT_USERPWD		=> "{$apiKey}:"
		) );
		$response = curl_exec( $curl );
		$data = json_decode($response, true);
		return $data;
	}

	public function getPosts() {
		$data = $this->createConnection();					
		$count = 0;
		foreach($data as $item) {
			if(is_array($item)) {
				foreach ($item as $post) {
					if($post['forum']['id'] == 2 || $post['forum']['id'] == 3) {
						$count++;
                        $date = date_create($post['firstPost']['date']);
						if($count == 5)
							break;
						echo '
                        <div class="update-block">
                            <div class="update-header-block"><img src="'.$post['firstPost']['author']['photoUrl'].'" loading="lazy" alt="" class="updater-avatar">
                                <div><a href="'.$post['url'].'" class="update-title">'.$post['title'].'</a>
                                <div>Posted by <a href="'.$post['firstPost']['author']['profileUrl'].'">'.$post['firstPost']['author']['name'].'</a> - '.date_format($date, 'd/m/Y').'</div>
                                </div><a href="'.$post['url'].'" class="read-update-btn w-button">read update</a>
                            </div>
                            <div class="update-post-information">
								'. $post['firstPost']['content'] .'
							</div>
						</div>';
					}
				}
			}
		}
	}
}