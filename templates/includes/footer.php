
    <!-- wikipage stop -->
  </div>

  <div class="clearer">&nbsp;</div>


	<div class="stylefoot">

<?php

if (isset($this->data['userid'])) {
	echo $this->t('authtext', 
		array(
			'%DISPLAYNAME%' => $this->data['displayname'], 
			'%USERID%' => $this->data['userid']
	) ); 
}

?>

		<br />Visit <a href="http://rnd.feide.no">rnd.feide.no</a>
	</div>

<script src="https://ssl.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-431110-13";
urchinTracker();
</script>
</body>
</html>