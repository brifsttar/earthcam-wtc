<?
switch($_GET['view']) {
	case 'memorial':
		$id = 1;
		break;
	case '4wtc':
		$id = 2;
		break;
	case '1wtc':
		$id = 3;
		break;
	case 'path':
		$id = 4;
		break;
	case 'hudson':
		$id = 5;
		break;
	case '3wtc':
		$id = 6;
		break;
	case '1wtcbase':
		$id = 7;
		break;
	case '1wtctop':
		$id = 8;
		break;
	case '30park':
		$id = 9;
		break;
	case '1wtctophalf':
		$id = 10;
		break;
	case '1wtclowerhalf':
		$id = 11;
		break;
	case 'pathtemp':
		$id = 12;
		break;
	case '3wtchalf':
		$id = 14;
		break;
	default:
		$id = 4;
		break;
}
$json = file_get_contents('http://earthcam.net/external/mobile_json/demoarchives.php?archiveid=' . $id . '&i=0&id=2029&projectid=0&clientid=0&camnum=1&view=wan&imagesize=choice&video_codec=mjpeg&locationid=0&date=0'); 
$data = json_decode($json);
header("Location: http://www.earthcam.net" . end($data->{'images'})->{'image'});
die();
?>