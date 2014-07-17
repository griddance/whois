<script>
function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=600,height=500,left = 200,top = 150');");
}
</script>
<?php

$label			= "Domain name";
$buttontext		= "Check";
$resulttext		= "Result";
$checkall		= "Check All Domain Types";
$pretext		= "";
$forwardurl		= "";
$s5_domain1		= "yes";
$s5_break1		= "no";
$s5_domain2		= "yes";
$s5_break2		= "no";
$s5_domain3		= "yes";
$s5_break3		= "no";
$s5_domain4		= "yes";
$s5_break4		= "no";
$s5_domain5		= "yes";
$s5_break5		= "yes";
$s5_domain6		= "yes";
$s5_break6		= "no";
$s5_domain7		= "yes";
$s5_break7		= "no";
$s5_domain8		= "yes";
$s5_break8		= "no";
$s5_domain9		= "yes";
$s5_break9		= "no";
$s5_domain10		= "yes";
$s5_break10		= "yes";
$s5_domain11		= "yes";
$s5_break11		= "no";
$s5_domain12		= "yes";
$s5_break12		= "no";
$s5_domain13		= "yes";
$s5_break13		= "no";
$s5_domain14		= "yes";
$s5_break14		= "no";
$s5_domain15		= "yes";
$s5_break15		= "yes";
$s5_domain16		= "yes";
$s5_break16		= "no";
$s5_domain17		= "yes";
$s5_break17		= "no";
$s5_domain18		= "yes";
$s5_break18		= "no";
$s5_domain19		= "no";
$s5_break19		= "no";
$s5_domain20		= "yes";
$s5_break20		= "no";
$s5_domain21		= "yes";
$s5_break21		= "yes";
$s5_domain22		= "yes";
$s5_break22		= "no";

?>

<?php if ($pretext != "") { ?>
<div style="margin-bottom:8px">
<?php echo $pretext ?>
</div>
<?php } ?>

<?php

    function checkDomain($domain,$server,$findText){
        // Open a socket connection to the whois server
        $con = fsockopen($server, 43);
        if (!$con) return false;
        
        // Send the requested doman name
        fputs($con, $domain."\r\n");
        
        // Read and store the server response
        $response = ' :';
        while(!feof($con)) {
            $response .= fgets($con,128); 
        }
        
        // Close the connection
        fclose($con);
        
        // Check the response stream whether the domain is available
		// echo $response;
        if (strpos($response, $findText)){
		
            return true;
        }
        else {
            return false;   
        }
    }
    
    function showDomainResult($domain,$server,$findText){	
       if (checkDomain($domain,$server,$findText)){
          echo "<div style='margin-bottom:4px'>$domain Available</div>";
       }
       else echo "<div style='margin-bottom:4px'>$domain <a href=\"javascript:popUp('quick.php?d=$domain&amp;s=$server')\">TAKEN</a></div>";
    }
	
?>

    <div id="main">
      <form action="<?php echo $forwardurl ?>" method="post" name="domain" id="domain">
	  <span style="font-weight:bold">
        <?php echo $label ?> :
	  </span>
		<div style="margin-top:8px; margin-bottom:8px">
				<input class="whoisinput" name="domainname" type="text" />
		</div>
		<div style="margin-top:8px; margin-bottom:8px">
		<div style="margin-bottom:8px">
                <input type="checkbox" name="all" checked="checked"/> <?php echo $checkall ?>
		</div>
		<?php if ($s5_domain1 == "yes") { ?>	
                <input type="checkbox" name="com"/> .com
				<?php if ($s5_break1 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>
		
		<?php if ($s5_domain2 == "yes") { ?>	
                <input type="checkbox" name="net"/> .net
				<?php if ($s5_break2 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>
		
		<?php if ($s5_domain3 == "yes") { ?>	
                <input type="checkbox" name="info"/> .info
				<?php if ($s5_break3 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>
		
		<?php if ($s5_domain4 == "yes") { ?>	
                <input type="checkbox" name="org"/> .org
				<?php if ($s5_break4 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>
		
		<?php if ($s5_domain5 == "yes") { ?>	
                <input type="checkbox" name="biz"/> .biz
				<?php if ($s5_break5 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>
		
		<?php if ($s5_domain6 == "yes") { ?>	
                <input type="checkbox" name="asia"/> .asia
				<?php if ($s5_break6 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>
		
		<?php if ($s5_domain7 == "yes") { ?>	
                <input type="checkbox" name="name"/> .name
				<?php if ($s5_break7 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>
		
		<?php if ($s5_domain8 == "yes") { ?>	
                <input type="checkbox" name="cc"/> .cc
				<?php if ($s5_break8 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>
		
		<?php if ($s5_domain9 == "yes") { ?>	
                <input type="checkbox" name="us"/> .us
				<?php if ($s5_break9 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>
		
		<?php if ($s5_domain10 == "yes") { ?>	
                <input type="checkbox" name="tv"/> .tv
				<?php if ($s5_break10 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>
		
		<?php if ($s5_domain11 == "yes") { ?>	
                <input type="checkbox" name="eu"/> .eu
				<?php if ($s5_break11 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>
		
		<?php if ($s5_domain12 == "yes") { ?>	
                <input type="checkbox" name="in"/> .in
				<?php if ($s5_break12 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>
		
		<?php if ($s5_domain13 == "yes") { ?>	
                <input type="checkbox" name="mobi"/> .mobi
				<?php if ($s5_break13 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>
		
		<?php if ($s5_domain14 == "yes") { ?>	
                <input type="checkbox" name="nl"/> .nl
				<?php if ($s5_break14 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>
		
		<?php if ($s5_domain15 == "yes") { ?>	
                <input type="checkbox" name="ca"/> .ca
				<?php if ($s5_break15 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>
		
				<?php if ($s5_domain16 == "yes") { ?>	
                <input type="checkbox" name="ru"/> .ru
				<?php if ($s5_break16 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>
		
				<?php if ($s5_domain17 == "yes") { ?>	
                <input type="checkbox" name="su"/> .su
				<?php if ($s5_break17 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>

				<?php if ($s5_domain18 == "yes") { ?>	
                <input type="checkbox" name="bz"/> .bz
				<?php if ($s5_break18 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>

				<?php if ($s5_domain19 == "yes") { ?>	
                <input type="checkbox" name="mn"/> .mn
				<?php if ($s5_break19 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>

				<?php if ($s5_domain20 == "yes") { ?>	
                <input type="checkbox" name="ws"/> .ws
				<?php if ($s5_break20 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>

				<?php if ($s5_domain21 == "yes") { ?>	
                <input type="checkbox" name="me"/> .me
				<?php if ($s5_break21 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>

				<?php if ($s5_domain22 == "yes") { ?>	
                <input type="checkbox" name="tel"/> .tel
				<?php if ($s5_break22 == "yes") { ?>
				<div style="height:8px"></div>
				<?php } ?>
		<?php } ?>

		</div>
				<input class="whoisbutton" type="submit" name="submitBtn" value="<?php echo $buttontext ?>"/>
      </form>

	  
<?php    
    if (isset($_POST['submitBtn'])){
        $domainbase = (isset($_POST['domainname'])) ? $_POST['domainname'] : '';
        $d_all      = (isset($_POST['all'])) ? 'all' : '';   
		
		if ($s5_domain1 == "yes") {
        $d_com      = (isset($_POST['com'])) ? 'com' : ''; 
		}	    
		
		if ($s5_domain2 == "yes") {
        $d_net      = (isset($_POST['net'])) ? 'net' : ''; 
		}	
		
		if ($s5_domain3 == "yes") {
        $d_info      = (isset($_POST['info'])) ? 'info' : ''; 
		}	   
		
		if ($s5_domain4 == "yes") {
        $d_org      = (isset($_POST['org'])) ? 'org' : ''; 
		}	
		
		if ($s5_domain5 == "yes") {
        $d_biz      = (isset($_POST['biz'])) ? 'biz' : ''; 
		}
		
		if ($s5_domain6 == "yes") {
        $d_couk      = (isset($_POST['asia'])) ? 'asia' : ''; 
		}
		
		if ($s5_domain7 == "yes") {
        $d_name      = (isset($_POST['name'])) ? 'name' : ''; 
		}
		
		if ($s5_domain8 == "yes") {
        $d_cc      = (isset($_POST['cc'])) ? 'cc' : ''; 
		}
		
		if ($s5_domain9 == "yes") {
        $d_us      = (isset($_POST['us'])) ? 'us' : ''; 
		}
		
		if ($s5_domain10 == "yes") {
        $d_tv      = (isset($_POST['tv'])) ? 'tv' : ''; 
		}
		
		if ($s5_domain11 == "yes") {
        $d_eu      = (isset($_POST['eu'])) ? 'eu' : ''; 
		}
		
		if ($s5_domain12 == "yes") {
        $d_in      = (isset($_POST['in'])) ? 'in' : ''; 
		}
		
		if ($s5_domain13 == "yes") {
        $d_mobi      = (isset($_POST['mobi'])) ? 'mobi' : ''; 
		}
		
		if ($s5_domain14 == "yes") {
        $d_nl      = (isset($_POST['nl'])) ? 'nl' : ''; 
		}
		
		if ($s5_domain15 == "yes") {
        $d_ca      = (isset($_POST['ca'])) ? 'ca' : ''; 
		}
		
		if ($s5_domain16 == "yes") {
        $d_ru      = (isset($_POST['ru'])) ? 'ru' : ''; 
		}
		
		if ($s5_domain17 == "yes") {
        $d_su      = (isset($_POST['su'])) ? 'su' : ''; 
		}

		if ($s5_domain18 == "yes") {
        $d_bz      = (isset($_POST['bz'])) ? 'bz' : ''; 
		}

		if ($s5_domain20 == "yes") {
        $d_ws      = (isset($_POST['ws'])) ? 'ws' : ''; 
		}

		if ($s5_domain21 == "yes") {
        $d_me      = (isset($_POST['me'])) ? 'me' : ''; 
		}

		if ($s5_domain22 == "yes") {
        $d_tel      = (isset($_POST['tel'])) ? 'tel' : ''; 
		}
        
        // Check domains only if the base name is big enough
        if (strlen($domainbase)>0){
?>
      <div id="caption" style="margin-top:8px; margin-bottom:8px; font-weight:bold"><?php echo $resulttext ?> :</div>
      <div id="result">

<?php        

			if ($s5_domain1 == "yes") {
            if (($d_com != '') || ($d_all != '') ) showDomainResult($domainbase.".com",'whois.crsnic.net','No match for');
			}	
			
			if ($s5_domain2 == "yes") {
            if (($d_net != '') || ($d_all != '') ) showDomainResult($domainbase.".net",'whois.crsnic.net','No match for');
			}	
			
			if ($s5_domain3 == "yes") {
            if (($d_info != '') || ($d_all != '') ) showDomainResult($domainbase.".info",'whois.afilias.net','NOT FOUND');
			}	
			
			if ($s5_domain4 == "yes") {
            if (($d_org != '') || ($d_all != '') ) showDomainResult($domainbase.".org",'whois.publicinterestregistry.net','NOT FOUND');
			}	
			
			if ($s5_domain5 == "yes") {
            if (($d_biz != '') || ($d_all != '') ) showDomainResult($domainbase.".biz",'whois.neulevel.biz','Not found:');
			}	
			
			if ($s5_domain6 == "yes") {
            if (($d_couk != '') || ($d_all != '') ) showDomainResult($domainbase.".asia",'whois.nic.asia','NOT FOUND');
			}	
			
			if ($s5_domain7 == "yes") {
            if (($d_name != '') || ($d_all != '') ) showDomainResult($domainbase.".name",'whois.name','No match');
			}	
			
			if ($s5_domain8 == "yes") {
            if (($d_cc != '') || ($d_all != '') ) showDomainResult($domainbase.".cc",'whois.nic.cc','No match');
			}	
			
			if ($s5_domain9 == "yes") {
            if (($d_us != '') || ($d_all != '') ) showDomainResult($domainbase.".us",'whois.nic.us','Not found:');
			}
			
			if ($s5_domain10 == "yes") {
            if (($d_tv != '') || ($d_all != '') ) showDomainResult($domainbase.".tv",'whois.nic.tv','No match for');
			}
			
			if ($s5_domain11 == "yes") {
            if (($d_eu != '') || ($d_all != '') ) showDomainResult($domainbase.".eu",'whois.eu','AVAILABLE');
			}
			
			if ($s5_domain12 == "yes") {
            if (($d_in != '') || ($d_all != '') ) showDomainResult($domainbase.".in",'whois.inregistry.net','NOT FOUND');
			}
			
			if ($s5_domain13 == "yes") {
            if (($d_mobi != '') || ($d_all != '') ) showDomainResult($domainbase.".mobi",'whois.dotmobiregistry.net','NOT FOUND');
			}
			
			if ($s5_domain14 == "yes") {
            if (($d_nl != '') || ($d_all != '') ) showDomainResult($domainbase.".nl",'whois.domain-registry.nl','free');
			}
			
			if ($s5_domain15 == "yes") {
            if (($d_ca != '') || ($d_all != '') ) showDomainResult($domainbase.".ca",'whois.cira.ca','AVAIL');
			}
			
			if ($s5_domain16 == "yes") {
            if (($d_ru != '') || ($d_all != '') ) showDomainResult($domainbase.".ru",'whois.ripn.net','No entries found');
			}
			
			if ($s5_domain17 == "yes") {
            if (($d_su != '') || ($d_all != '') ) showDomainResult($domainbase.".su",'whois.ripn.net','No entries found');
			}

			if ($s5_domain18 == "yes") {
            if (($d_bz != '') || ($d_all != '') ) showDomainResult($domainbase.".bz",'whois2.afilias-grs.net','NOT FOUND');
			}

			if ($s5_domain19 == "yes") {
            if (($d_mn != '') || ($d_all != '') ) showDomainResult($domainbase.".mn",'whois.nic.mn','Domain not found');
			}

			if ($s5_domain20 == "yes") {
            if (($d_ws != '') || ($d_all != '') ) showDomainResult($domainbase.".ws",'whois.worldsite.ws','No match for');
			}

			if ($s5_domain21 == "yes") {
            if (($d_me != '') || ($d_all != '') ) showDomainResult($domainbase.".me",'whois.nic.me','NOT FOUND');
			}

			if ($s5_domain22 == "yes") {
            if (($d_tel != '') || ($d_all != '') ) showDomainResult($domainbase.".tel",'whois.nic.tel','Not found');
			}

?>

     </div>
<?php            
        }
    }
?>    

    </div>