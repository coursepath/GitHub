
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>page3</title>
<link href="css/demo.css" rel="stylesheet" type="text/css" />
<style type="text/css">

</style>
<script type="text/javascript">
function check(elem) {
    document.getElementById('mySelect1').disabled = !elem.selectedIndex;
}
</script>
</head>

<body>
        <div id="column">
<!-- START HEADER -->           
        <header>
                <div class="login">
                <div><a href="#" >LOGIN</a></div>
                <div style="font-size:small; padding-right:10px; padding-bottom:50px"><a href="#">SIGN UP/REGISTER</a></div>
            </div>
            <div class="clear"></div>
            <div class="menubar">
                                <ul style="float:right;">
                        <li style="float:left; padding-right: 10px "><a href="#">HOME</a></li>
                    <li style="float:left;  padding-right: 10px "><a href="#">ABOUT US</a></li>
                        <li style="float:left;  padding-right: 10px "><a href="#">SERVICES</a></li>                    
                        <li style="float:left; padding-right: 10px "><a href="#">CONTACT US</a></li>
                </ul>
            </div>
        </header>
<!-- END HEADER -->       
    <div class="clear"></div><br />
    <div class="hr"><hr /></div>
    <div class="clear"></div>
<!-- START MAINBODY -->
        <div id="mainbody">
    <!-- division one -->
        <div id="division1">
                <h2 style="text-align:center">WHAT AM I NOW</h2>
                 <img src="images/download.jpg" width="400" height="400"/><br/>            <br />
             <select style="width:400px; height:30px;   letter-spacing:1px;">
                           <option data-placeholder="true">Please choose:</option>
                        <option label="10th">10th</option>
                <option label="PUC">PUC</option>
                 </select>
        </div>
     <!-- division two -->
        <div id="division2">
                <h2 style="text-align:center">WHAT I WANT TO BE</h2>
            <img src="images/download (1).jpg" width="400" height="400"/>
            <br />            <br />
            <select  id="mySelect" onChange="check(this);" style="width:400px; height:30px; letter-spacing:1px;">
                           <option data-placeholder="true" style=" ">Please choose:</option>
                <option label="Course">Course</option>
                <option label="Carrer">Carrer</option>
            </select>
<!--            <br /><br />
                        <select id="mySelect1"  style="width:400px; height:30px;" disabled="disabled">
                           <option data-placeholder="true" >Please choose:</option>
                <option label="BCA">BCA</option>
                <option label="BSC">BSC</option>
            </select>
-->
            <br/><br/>
            <div style="padding-right:40px">
                <button type="submit" name="submit" value="Send" id="submit" style=" float : right;">GO</button>
<!--                
                         <button type="submit" value="go" style="height:40px; width:150px; float:right; font-weight:bold; padding-top: 5px;">Go</button>
-->             
                </div>
        </div>
     <!-- division three -->
        <div id="division3"  style="padding-top: 7%">
                           <div id="co"  style="padding-left:15%">
                        <p>COURSE</p>
                    <p>OPTIONS</p>               
               </div>
               <div id="fm" style="font-weight:bold">
                                        <p>FOR</p>
                    <p>ME</p>
               </div>
               <div class="clear"> </div>                                                      
                   <div id="myselect3" style="padding-left:15%; padding-top:15%">
                        <div id="sf">
                                <p>STARTING FROM</p>
                        </div>
                    <div>
                                <select style="width:300px; height:30px; padding-top:5px;       letter-spacing:1px;">
                                <option label="10th">10th</option>
                                <option label="10th">10th</option>
                            <option label="10th">10th</option>
                                <option label="10th">10th</option>
                            </select>
                    </div>
                    <div style="padding-top: 5%">
                                <button type="submit" name="submit" value="Send" id="submit" style="width: 79%; font-size:18px">SHOW OPTIONS</button>
                    </div>                   
                </div>                                       
         </div> 
     <!-- end of division 3-->                      
    </div>
<!-- END MAINBODY -->
    <div class="clear"></div><br /><br />

    <div class="clear"></div>
<!-- START SECONDBODY -->
        <div id="secondbody"  style="margin-left:auto; margin-right:auto;>
    <!-- second division1 -->
                <div id="seconddiv1">
                        <img src="images/feather-ink.png" width="100" height="100""/>
            <p style="font-size:24px">
                ADDMISSION
            </p>
            <p>
                My guess is user1359163's anwswer will help, though you might care to know why: using float effectively removes the element             </p>
            <div style="float:right">
                <button type="submit" name="submit" value="Send" id="readmore" style=" float : right;">Read More</button>               
            </div>
        </div>
    <!-- second division2 -->        
        <div id="seconddiv2">
                        <img src="images/Counselling.png" width="100" height="100" />
            <p style="font-size:24px">
                COUNSELLING
            </p>
            <p>
                My guess is user1359163's anwswer will help, though you might care to know why: using float effectively removes the element             </p>
            <div style="float:right">
                <button type="submit" name="submit" value="Send" id="readmore" style=" float : right;">Read More</button>               
            </div>
        </div>
    <!-- second division3 -->        
        <div id="seconddiv3">
                        <img src="images/education-loan-mumbai.jpg" width="100" height="100" />
            <p style="font-size:24px">
                STUDY LOAN
            </p>
            <p>
                My guess is user1359163's anwswer will help, though you might care to know why: using float effectively removes the element             </p>
            <div style="float:right">
                <button type="submit" name="submit" value="Send" id="readmore" style=" float : right;">Read More</button>               
            </div>
        </div>
    </div>

<!-- END SECOND BODY -->    
<br /><br />
<!-- END BODY -->
    <div class="clear"></div><br /><br />
    <div class="hr"><hr /></div>
    <div class="clear"></div>
<!-- START FOOTER -->

<div id="footer">
        <!-- start footer1 -->
        <div id="footer1">
                <p style="font-weight:bold">ABOUT US</p>
            <p>My guess is user1359163's anwswer will help, though you might care to know why: using float effectively removes the element
             out of the document's normal flow, a bit like changing the z-index, allowing the element to flow over div borders,
              labels, spans and... 'ignore' clear styles.
                        </p>
        </div>
    <!-- start footer2 -->
        <div id="footer2" style="line-height:20%">
                <p style="font-weight:bold">Top 50 Colleges</p><br/>
            <p>1.       R.V.College of Engineering (RVCE) </p>
            <p>2.       PES Institute of Technology (PESIT) </p>
            <p>3. M.S.Ramaiah Institute Of Technology (MSRIT) </p>
            <p>4. Bangalore Institute of Technology (BIT) </p>
            <p>5. RNS Institute of Technology (RNSIT) more... </p>
        </div>'
    <!-- start footer3 -->
        <div id="footer3">
                <div id="searchbar">
                                <div class="ui-toolbar ui-widget-header ui-helper-clearfix" style="padding:5px;">
                                   <span style="position: absolute;" class="btnSearch ui-state-default" title="search"><span class="ui-icon ui-icon-search"></span></span>
                                <input type="text" placeholder="Search">
                                </div>                          
                </div>
            <div id="wearesocial" style="margin:auto; padding-left:150px; padding-top:50px">
                                <p>&nbsp;&nbsp;&nbsp;WE ARE SOCIAL :</p>
                <a href="#"><img src="images/1389708843_ccink_facebook.png" width="57" height="57"/></a>
                <a href="#"><img src="images/1389708862_ccink_twitter.png" width="57" height="57"/></a>
                <a href="#"><img src="images/1389708879_ccink_linkedin.png" width="57" height="57"/></a>                
            </div>
        </div>
</div>
<!--  END OF FOOTER -->
        <div class="clear"></div>
        <div id="copyrights" style="font-size:12px; background: grey; text-align:center">
        <p>     &copy; COPYRIGHTS 2014. www.theprefx.com</p>
    </div>
</body>
</html>