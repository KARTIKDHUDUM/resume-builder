<?php
// Perform template downloading
if (isset($_POST['templateName']) && isset($_POST['task']))
{
	if ('download' == $_POST['task'])
	{
		error_reporting(0);

		$templatePath = __DIR__ . '/templates/' . $_POST['templateName'] . '.html';

		// Include the main TCPDF library (search for installation path).
		require_once(__DIR__ . '/library/tcpdf/tcpdf.php');

		// create new PDF document
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Nicola Asuni');
		$pdf->SetTitle('TCPDF Example 021');
		$pdf->SetSubject('TCPDF Tutorial');
		$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

		// add a page
		$pdf->AddPage();

		// output the HTML content
		$html = replaceTemplate(readTemplate($templatePath));
		$pdf->writeHTML($html, true, 0, true, 0);

		// reset pointer to the last page
		$pdf->lastPage();

		//Close and output PDF document
		ob_end_clean();
		$pdf->Output($_POST['templateName'] . '.pdf', 'D');

		die;
	}
}
?>
<html>
	<head>
		<title>Download Resume</title>
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="media/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="media/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="media/js/bootstrap.min.js"></script>
		<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('.modal').on('show.bs.modal', function () {
					console.log($(this));
			       $(this).find('.modal-body').css({
			              width:'auto', //probably not needed
			              height:'auto', //probably not needed
			              'max-height':'100%'
			       });
			});
		});
		</script>
		<style type="text/css">
		.modal-dialog{
			width: auto;
		}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1>Available Templates</h1>
				<!-- Templates -->
				<ul class="nav nav-pills">
				<?php
					$templates = collectTemplates();
				?>
				<?php for ($i = 0, $n = count($templates); $i < $n; $i++) : ?>
					<li>
						<button type="button" class="btn" data-toggle="modal" data-target="#<?php echo $templates[$i]['name'] . $i; ?>">
						  <?php echo $templates[$i]['name']; ?>
						</button>
					</li>
				<?php endfor; ?>
				</ul>
			</div>

			<!-- Modal -->
			<?php for ($i = 0, $n = count($templates); $i < $n; $i++) : ?>
				<?php $template = $templates[$i]; ?>
				<div class="modal fade"
					id="<?php echo $template['name'] . $i; ?>"
					tabindex="-1"
					role="dialog"
					aria-labelledby="<?php echo $template['name'] . $i; ?>Label"
					aria-hidden="true"
				>
				  <div class="modal-dialog">
					<div class="modal-content">
					  <div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="<?php echo $template['name'] . $i; ?>Label"><?php echo $template['name']; ?></h4>
					  </div>
					  <div class="modal-body">
						<?php echo replaceTemplate(readTemplate($template['path'])); ?>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
						<form action="" method="post" name="downloadTemplate" id="downloadTemplate">
							<button type="button" class="btn btn-primary" onclick="this.form.submit();">Download Resume</button>
							<input type="hidden" name="templateName" value="<?php echo $template['name']; ?>" />
							<input type="hidden" name="task" value="download" />
						</form>
					  </div>
					</div>
				  </div>
				</div>
			<?php endfor; ?>
		</div>
	</body>
</html>

<?php

function collectTemplates()
{
	$templateDir = __DIR__ . '/templates';
	$templates   = array();

	if ($handle = opendir($templateDir))
	{
		$i = 0;

		while (false !== ($entry = readdir($handle)))
		{
			if ($entry != '.' && $entry != '..')
			{
				preg_match("/.*.html/", $entry, $template);

				if (count($template))
				{
					$templates[$i]['path'] = __DIR__ . '/templates/' . $entry;
					$templates[$i]['name'] = str_replace('.html', '', $entry);

					$i++;
				}
			}
		}

		closedir($handle);
	}

	return $templates;
}

function readTemplate($file)
{
	$handle   = fopen($file, "r");
	$content  = fread($handle, filesize($file));
	fclose($handle);

	return $content;
}

function replaceTemplate($content)
{
	$content = str_replace('{full_name}', $_POST['full_name'], $content);
	$content = str_replace('{resume_title}', $_POST['resume_title'], $content);
	$content = str_replace('{mobile}', $_POST['mobile'], $content);
	$content = str_replace('{email}', $_POST['email'], $content);
	$content = str_replace('{address}', $_POST['address'], $content);
	$content = str_replace('{profile_info}', $_POST['profile_info'], $content);
	$content = str_replace('{programming_language}', $_POST['programming_language'], $content);
	$content = str_replace('{web}', $_POST['web'], $content);
	$content = str_replace('{framework}', $_POST['framework'], $content);
	$content = str_replace('{operating_system}', $_POST['os'], $content);

	$master            =$_POST['master']." ". $_POST['master_college']." ".$_POST['master_completion'];
	$content = str_replace('{master}', $master, $content);

	$bachlor           = $_POST['bechlor']." ". $_POST['bachlor_college']." ".$_POST['bechlor_complrtion'];
	$content = str_replace('{bechlor}', $bachlor, $content);

	$class12           = $_POST['class_12']." ".$_POST['board_name']." ".$_POST['completion_12'];
	$content = str_replace('{class12}', $class12, $content);

	$class10           =$_POST['class_10']." ".$_POST['schoolboard']." ".$_POST['completion_10'];
	$content = str_replace('{class10}', $class10, $content);

	$content = str_replace('{project1}', $_POST['project1'], $content);
	$content = str_replace('{p1_desc}', $_POST['project1abstract'], $content);

	$content = str_replace('{project2}', $_POST['project2'], $content);
	$content = str_replace('{p2_desc}', $_POST['project2abstract'], $content);

	$content = str_replace('{project3}', $_POST['project3'], $content);
	$content = str_replace('{p3_desc}', $_POST['project3abstract'], $content);

	$content = str_replace('{project4}', $_POST['project4'], $content);
	$content = str_replace('{p4_desc}', $_POST['project4abstract'], $content);

	$content = str_replace('{extra_activity}', $_POST['extra_activity'], $content);

	$content = str_replace('{fathername}', $_POST['fathername'], $content);
	$content = str_replace('{gender}', $_POST['gender'], $content);
	$content = str_replace('{dob}', $_POST['dob'], $content);
	$content = str_replace('{nationality}', $_POST['nationality'], $content);
	$content = str_replace('{maritalstatus}', $_POST['maritalstatus'], $content);
	$content = str_replace('{languagesknown}', $_POST['languagesknown'], $content);

	return $content;
}
