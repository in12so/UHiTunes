<html>
<head>
<title>UHI Tunes Add CD</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<header>
    <h1>UHI Tunes</h1>
</header>

<nav>
    <ul>
        <li><a href="home.html">Home</a></li>
        <li><a class="active" href="AddCD.php">Add CD</a></li>
        <li><a href="AddTracks.php">Add CD tracks</a></li>
        <li><a href="EnterSearchCDs.php">Search CDs</a></li>
        <li><a href="EnterSearchCDTracks.php">Search CD Tracks</a></li>
		<li><a href="TableReportCalc.php">CD Report</a></li>
        <li><a href="AboutUs.html">About Us</a></li>
        <li><a href="ContactUs.html">Contact Us</a></li>
    </ul>
</nav>  

<body>
<h1>Add CD</h1>

<form method="POST" action="InsertCD.php">

<table>
 <tr>
  <td>CD Title:</td>
  <td><input type="text" name="CDTitle" size="50" "> </td>
 </tr>
 <tr>
  <td>Number of tracks:</td>
  <td><input type="number" name="NoTracks" size="2" > </td>
 </tr>
 <tr>
  <td>Label:</td>
  <td><input type="text" name="Label" size="20" "> </td>
 </tr>
 <tr>
  <td>Release Year:</td>
  <td><input type="text" name="ReleaseYear" size="4" "> </td>
 </tr>
    <tr>
  <td>Artist name:</td>
  <td><input type="text" name="ArtistName" size="20" "> </td>
 </tr>
    <tr>
  <td>CD Price:</td>
  <td><input type="text" name="CDPrice" size="6" "> </td>
 </tr>
    <tr>
  
 <td colspan="2"><input type="submit" value="Add CD"/></td>
 </tr>
<tr>
  <td colspan="2"><input type="reset" value="Clear"/></td>
 </tr>
</table>
</form>
<footer>
<a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px;" href="https://unsplash.com/@iammrcup?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Download free do whatever you want high-resolution photos from Mr Cup / Fabien Barral"><span style="display:inline-block;padding:2px 3px;"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-1px;fill:white;" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M20.8 18.1c0 2.7-2.2 4.8-4.8 4.8s-4.8-2.1-4.8-4.8c0-2.7 2.2-4.8 4.8-4.8 2.7.1 4.8 2.2 4.8 4.8zm11.2-7.4v14.9c0 2.3-1.9 4.3-4.3 4.3h-23.4c-2.4 0-4.3-1.9-4.3-4.3v-15c0-2.3 1.9-4.3 4.3-4.3h3.7l.8-2.3c.4-1.1 1.7-2 2.9-2h8.6c1.2 0 2.5.9 2.9 2l.8 2.4h3.7c2.4 0 4.3 1.9 4.3 4.3zm-8.6 7.5c0-4.1-3.3-7.5-7.5-7.5-4.1 0-7.5 3.4-7.5 7.5s3.3 7.5 7.5 7.5c4.2-.1 7.5-3.4 7.5-7.5z"></path></svg></span><span style="display:inline-block;padding:2px 3px;">Mr Cup / Fabien Barral</span></a>    
</footer>
</body>
</html>
