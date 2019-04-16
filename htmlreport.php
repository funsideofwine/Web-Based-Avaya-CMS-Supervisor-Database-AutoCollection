<?php

	


?>


<html>

<head>
    <title></title>
    
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([		
        ["Hour","Volume", { role: "style" } ],        
        ["00H",12,"gold"],	
		["01H",3,"gold"],
        ["02H",33,"gold"],
        ["03H",4,"gold"],
		["04H",5,"gold"],
        ["05H",7,"gold"],
        ["06H",4,"gold"],
        ["07H",4,"gold"],
        ["08H",4,"gold"],
		["09H",4,"gold"],	
        ["10H",4,"gold"],
        ["11H",4,"gold"],
        ["12H",4,"gold"],
        ["13H",4,"gold"],
		["14H",4,"gold"],
        ["15H",4,"gold"],
        ["16H",4,"gold"],
        ["17H",4,"gold"],
        ["18H",4,"gold"],
		["19H",4,"gold"],		
		["20H",4,"gold"],
        ["21H",4,"gold"],
		["22H",4,"gold"],
        ["23H",4,"gold"]		
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Call Vol/Hr ( <?php echo "$mo/$dd/$yy"; ?> )",
        width: "200%",
        height: 400,
        bar: {groupWidth: "75%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
  
    <style>
        <!--
        /* Font Definitions */
        
        @font-face {
            font-family: "Cambria Math";
            panose-1: 2 4 5 3 5 4 6 3 2 4;
        }
        
        @font-face {
            font-family: "Calibri Light";
            panose-1: 2 15 3 2 2 2 4 3 2 4;
        }
        
        @font-face {
            font-family: Calibri;
            panose-1: 2 15 5 2 2 2 4 3 2 4;
        }
        
        @font-face {
            font-family: "Segoe UI";
            panose-1: 2 11 5 2 4 2 4 2 2 3;
        }
        
        @font-face {
            font-family: "Browallia New";
            panose-1: 2 11 6 4 2 2 2 2 2 4;
        }
        
        @font-face {
            font-family: FangSong;
            panose-1: 2 1 6 9 6 1 1 1 1 1;
        }
        
        @font-face {
            font-family: "\@FangSong";
            panose-1: 2 1 6 9 6 1 1 1 1 1;
        }
        /* Style Definitions */
        
        p.MsoNormal,
        li.MsoNormal,
        div.MsoNormal {
            margin: 0in;
            margin-bottom: .0001pt;
            font-size: 11.0pt;
            font-family: "Calibri", sans-serif;
        }
        
        a:link,
        span.MsoHyperlink {
            mso-style-priority: 99;
            color: #0563C1;
            text-decoration: underline;
        }
        
        a:visited,
        span.MsoHyperlinkFollowed {
            mso-style-priority: 99;
            color: #954F72;
            text-decoration: underline;
        }
        
        p {
            mso-style-priority: 99;
            mso-margin-top-alt: auto;
            margin-right: 0in;
            mso-margin-bottom-alt: auto;
            margin-left: 0in;
            font-size: 12.0pt;
            font-family: "Times New Roman", serif;
        }
        
        span.EmailStyle17 {
            mso-style-type: personal;
            font-family: "Calibri", sans-serif;
            color: windowtext;
        }
        
        span.EmailStyle18 {
            mso-style-type: personal;
            font-family: "Calibri", sans-serif;
            color: #1F497D;
        }
        
        span.EmailStyle19 {
            mso-style-type: personal;
            font-family: "Calibri", sans-serif;
            color: #1F497D;
        }
        
        span.EmailStyle20 {
            mso-style-type: personal;
            font-family: "Calibri", sans-serif;
            color: #1F497D;
        }
        
        span.EmailStyle21 {
            mso-style-type: personal;
            font-family: "Calibri", sans-serif;
            color: #1F497D;
        }
        
        span.EmailStyle23 {
            mso-style-type: personal-reply;
            font-family: "Calibri", sans-serif;
            color: #1F497D;
        }
        
        .MsoChpDefault {
            mso-style-type: export-only;
            font-size: 10.0pt;
        }
        
        @page WordSection1 {
            size: 8.5in 11.0in;
            margin: 1.0in 1.0in 1.0in 1.0in;
        }
        
        div.WordSection1 {
            page: WordSection1;
        }
        
        -->
    </style>
	
	

	
	
		
	
	
	
	
	
</head>

<body bgcolor="#DBDBDB" lang="EN-US" link="#0563C1" vlink="#954F72">


    <div>
        <p>
            <o:p>&nbsp;</o:p>
        </p>
        <p  align="center" style="text-align:center;line-height:150%"><span style="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#2F5597;mso-style-textfill-fill-color:#2F5597;mso-style-textfill-fill-alpha:100.0%">**</span><span style="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#17375E;mso-style-textfill-fill-color:#17375E;mso-style-textfill-fill-alpha:100.0%"> </span><span style="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#2F5597;mso-style-textfill-fill-color:#2F5597;mso-style-textfill-fill-alpha:100.0%">System generated E-mail, please do not reply to this mail</span><span style="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#17375E;mso-style-textfill-fill-color:#17375E;mso-style-textfill-fill-alpha:100.0%"> </span><span style="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#2F5597;mso-style-textfill-fill-color:#2F5597;mso-style-textfill-fill-alpha:100.0%">**<o:p></o:p></span></p>
        <p  align="center" style="text-align:center;line-height:150%"><span style="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#2F5597;mso-style-textfill-fill-color:#2F5597;mso-style-textfill-fill-alpha:100.0%">**</span><span style="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#17375E;mso-style-textfill-fill-color:#17375E;mso-style-textfill-fill-alpha:100.0%"> </span><span style="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#2F5597;mso-style-textfill-fill-color:#2F5597;mso-style-textfill-fill-alpha:100.0%">Pls Reach out <a href="mailto:MailgroupSystemAdmins@nwc.com.sa"><span style="color:#2F5597;mso-style-textfill-fill-color:#2F5597;mso-style-textfill-fill-alpha:100.0%">MailgroupSystemAdmins@nwc.com.sa</span></a> for any Queries</span><span s="" tyle="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#17375E;mso-style-textfill-fill-color:#17375E;mso-style-textfill-fill-alpha:100.0%"> </span><span style="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#2F5597;mso-style-textfill-fill-color:#2F5597;mso-style-textfill-fill-alpha:100.0%">**<o:p></o:p></span></p>
        <p  align="center" style="text-align:center;line-height:150%"><i><span style="font-size:12.0pt;line-height:150%;font-family:&quot;Courier New&quot;;color:#595959"><o:p>&nbsp;</o:p></span></i></p>
        <div align="center">
       <table class="MsoNormalTable" border="0" cellspacing="0" cellpadding="0" width="0" style="width:665.9pt;b
 order-collapse:collapse">
                <tr style="height:40.5pt">
                    <td width="888" nowrap="" style="width:665.9pt;background:black;padding:0in 5.4pt 0in 5.4pt;height:40.5pt">
                        <p  align="center" style="text-align:center">
						<span style="font-size:16.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;color:white">NWC Windows Server Patch Compliance Status :: 
						HP support</span><b><span style="font-family:&quot;Segoe UI&quot;,sans-serif;color:white"><o:p></o:p></span></b></p>
                    </td>
                </tr>
                <tr style="height:91.55pt">
                    <td width="888" valign="top" style="width:665.9pt;background:white;padding:0in 5.4pt 0in 5.4pt;height:91.55pt">
                      
                        <div align="center">
						 <div id="columnchart_values" ></div>
                        </div>
                        
                    </td>
                </tr>
                <tr style="height:9.9pt">
                    <td width="888" valign="top" style="width:665.9pt;background:white;padding:0in 5.4pt 0in 5.4pt;height:9.9pt">
                        <p  align="center" style="text-align:center"><span style="font-size:10.0pt;font-family:&quot;Courier New&quot;;color:#129640;mso-style-textfill-fill-color:#129640;mso-style-textfill-fill-alpha:100.0%">----- Developed by WIPRO Managed Services for NWC -----<o:p></o:p></span></p>
                        <p  align="center" style="text-align:center"><i><span style="color:#1F497D"><o:p>&nbsp;</o:p></span></i></p>
                    </td>
                </tr>
				
				
				
				
				
				
            </table>
        </div>
        <p  align="center" style="text-align:center;line-height:150%">
            <o:p>&nbsp;</o:p>
        </p>
        <p >
            <o:p>&nbsp;</o:p>
        </p>
        <p >
            <o:p>&nbsp;</o:p>
        </p>
    </div>
	
</body>

</html>