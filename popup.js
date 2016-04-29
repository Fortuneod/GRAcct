$(function() {
          
		  
		 $('#person').click(function(e) {
          $('.login2').show();
          $('.login02').hide();
		  $('.login21').hide();
		  $('.login22').hide();
		  $('.login23').hide();
		 }
		);
		
		$('#finance').click(function(e) {
          $('.login21').show();
          $('.login02').hide();
		   $('.login2').hide();
		  $('.login22').hide();
		  $('.login23').hide();
		 }
		);
		
		$('#stock').click(function(e) {
          $('.login22').show();
          $('.login02').hide();
		   $('.login2').hide();
		  $('.login21').hide();
		  $('.login23').hide();
		 }
		);
		
		$('#staff').click(function(e) {
          $('.login23').show();
          $('.login02').hide();
		   $('.login2').hide();
		  $('.login22').hide();
		  $('.login21').hide();
		 }
		);
		
		
		        		
		$('#newuser').click(function(e) {
          $('.login3').show();
		   $('.login2').hide();
        }
		);
		$('#newuserback').click(function(e) {
          $('.login3').hide();
		   $('.login2').show();
        }
		);
		
		$('#upduser').click(function(e) {
          $('.login10').show();
		   $('.login2').hide();
        }
		);
		$('#upduserback').click(function(e) {
          $('.login10').hide();
		   $('.login2').show();
        }
		);
		
		$('#removeuser').click(function(e) {
          $('.login11').show();
		   $('.login2').hide();
        }
		);
		$('#removeuserback').click(function(e) {
          $('.login11').hide();
		   $('.login2').show();
        }
		);
		
/*		$('#viewperson').click(function(e) {
          $('.login8').show();
		   $('.login2').hide();
        }
		);
		$('#viewpersonback').click(function(e) {
          $('.login8').hide();
		   $('.login2').show();
        }
		);
*/		
		$('#viewusers').click(function(e) {
          $('.login9').show();
		   $('.login2').hide();
        }
		);
		$('#viewusersback').click(function(e) {
          $('.login9').hide();
		   $('.login2').show();
        }
		);
			
		$('#newclient').click(function(e) {
          $('.login4').show();
		   $('.login21').hide();
        }
		);
		$('#newclientback').click(function(e) {
          $('.login4').hide();
		   $('.login21').show();
        }
		);	
		
		$('#viewclients').click(function(e) {
          $('.login5').show();
		   $('.login21').hide();
		   $('#footer').hide();
        }
		);
		$('#viewclientsback').click(function(e) {
          $('.login5').hide();
		   $('.login21').show();
		   $('#footer').show();
        }
		);
			
		$('#checkclient').click(function(e) {
          $('.login6').show();
		   $('.login21').hide();
        }
		);
		$('#checkclientback').click(function(e) {
          $('.login6').hide();
          $('#client2').hide();
		   $('.login21').show();
        }
		);
		
		$('#checkrem').click(function(e) {
			$('#client2').show();
        }
		);
		
		$('#indstaff').click(function(e) {
			$('#stafftable').show();
			$('#footer').hide();
			$('#getstaff').hide();
        }
		);
		
		$('#indstaffback').click(function(e) {
			$('#stafftable').hide();
			$('.login17').hide();
			$('.login23').show();
			$('#footer').show();
			$('#getstaff').show();
        }
		);
		
		$('#newstaff').click(function(e) {
          $('.login12').show();
		   $('.login23').hide();
		   $('#footer').hide();
        }
		);
		$('#newstaffback').click(function(e) {
          $('.login12').hide();
		   $('.login23').show();
		    $('#footer').show();
        }
		);
		
		$('#updatestaff').click(function(e) {
          $('.login13').show();
		   $('.login23').hide();
		}
		);
		$('#updatestaffback').click(function(e) {
          $('.login13').hide();
		   $('.login23').show();
		}
		);
		
		$('#viewstaff').click(function(e) {
          $('.login14').show();
		   $('.login23').hide();
		}
		);
		$('#viewstaffback').click(function(e) {
          $('.login14').hide();
		   $('.login23').show();
		}
		);
		
		$('#viewallstaff').click(function(e) {
          $('.login16').show();
		   $('.login14').hide();
		}
		);
		$('#viewallstaffback').click(function(e) {
          $('.login16').hide();
		   $('.login23').show();
		}
		);
		
		$('#viewindstaff').click(function(e) {
          $('.login17').show();
		   $('.login14').hide();
		}
		);
		$('#viewindstaffback').click(function(e) {
          $('.login17').hide();
		   $('.login23').show();
		}
		);
		
		$('#deletestaff').click(function(e) {
          $('.login15').show();
		   $('.login23').hide();
		}
		);
		$('#deletestaffback').click(function(e) {
          $('.login15').hide();
		   $('.login23').show();
		}
		);
		
		$('#assetmain').click(function(e) {
          $('.login18').show();
		   $('.login22').hide();
		}
		);
		$('#assetmainback').click(function(e) {
          $('.login18').hide();
		   $('.login22').show();
		}
		);
		
		$('#newasset').click(function(e) {
          $('.login19').show();
		   $('.login18').hide();
		}
		);
		$('#newassetback').click(function(e) {
          $('.login19').hide();
		   $('.login18').show();
		}
		);
		
		$('#viewassets').click(function(e) {
          $('.login24').show();
		   $('.login18').hide();
		}
		);
		$('#viewassetsback').click(function(e) {
          $('.login24').hide();
		   $('.login18').show();
		}
		);
		
		$('#removeasset').click(function(e) {
          $('.login25').show();
		   $('.login18').hide();
		}
		);
		$('#removeassetback').click(function(e) {
          $('.login25').hide();
		   $('.login18').show();
		}
		);
						
		$('#expensemain').click(function(e) {
          $('.login26').show();
		   $('.login22').hide();
		}
		);
		$('#expensemainback').click(function(e) {
          $('.login26').hide();
		   $('.login22').show();
		}
		);
		
		$('#newexpense').click(function(e) {
          $('.login27').show();
		   $('.login26').hide();
		}
		);
		$('#newexpenseback').click(function(e) {
          $('.login27').hide();
		   $('.login26').show();
		}
		);
		
		$('#viewexpenses').click(function(e) {
          $('.login28').show();
		   $('.login26').hide();
		}
		);
		$('#viewexpensesback').click(function(e) {
          $('.login28').hide();
		   $('.login26').show();
		}
		);
		
		$('#incomemain').click(function(e) {
			$('.login29').show();
		   $('.login22').hide();
		}
		);
		$('#incomemainback').click(function(e) {
          $('.login29').hide();
		   $('.login22').show();
		}
		);
		
		$('#newincome').click(function(e) {
          $('.login30').show();
		   $('.login29').hide();
		}
		);
		$('#newincomeback').click(function(e) {
          $('.login30').hide();
		   $('.login29').show();
		}
		);
		
		$('#viewincome').click(function(e) {
          $('.login31').show();
		   $('.login29').hide();
		}
		);
		$('#viewincomeback').click(function(e) {
          $('.login31').hide();
		   $('.login29').show();
		}
		);
		
		$('#liabilitymain').click(function(e) {
          $('.login32').show();
		   $('.login22').hide();
		}
		);
		$('#liabilitymainback').click(function(e) {
          $('.login32').hide();
		   $('.login22').show();
		}
		);
		
		$('#newliability').click(function(e) {
          $('.login33').show();
		   $('.login32').hide();
		}
		);
		$('#newliabilityback').click(function(e) {
          $('.login33').hide();
		   $('.login32').show();
		}
		);
		
		$('#viewliabilities').click(function(e) {
          $('.login34').show();
		   $('.login32').hide();
		}
		);
		$('#viewliabilitiesback').click(function(e) {
          $('.login34').hide();
		   $('.login32').show();
		}
		);
		
		$('#removeliability').click(function(e) {
          $('.login35').show();
		   $('.login32').hide();
		}
		);
		$('#removeliabilityback').click(function(e) {
          $('.login35').hide();
		   $('.login32').show();
		}
		);
		
		$('#payrollmain').click(function(e) {
          $('.login36').show();
		   $('.login22').hide();
		}
		);
		$('#payrollmainback').click(function(e) {
          $('.login36').hide();
		   $('.login22').show();
		}
		);
		
		$('#organisepayroll').click(function(e) {
          $('.login37').show();
		   $('.login36').hide();
		}
		);
		$('#organisepayrollback').click(function(e) {
          $('.login37').hide();
		   $('.login36').show();
		}
		);
		
		$('#allowances').click(function(e) {
          $('.login38').show();
		   $('.login37').hide();
		}
		);
		$('#allowancesback').click(function(e) {
          $('.login38').hide();
		   $('.login37').show();
		}
		);
		
		$('#deductions').click(function(e) {
          $('.login39').show();
		   $('.login37').hide();
		}
		);
		$('#deductionsback').click(function(e) {
          $('.login39').hide();
		   $('.login37').show();
		}
		);
		
		$('#generatepayroll').click(function(e) {
          $('.login40').show();
		   $('.login36').hide();
		}
		);
		$('#generatepayrollback').click(function(e) {
          $('.login40').hide();
		   $('.login36').show();
		}
		);
		
		$('#payconfirm').click(function(e) {
          $('.login41').show();
		   $('.login36').hide();
		}
		);
		$('#payconfirmback').click(function(e) {
          $('.login41').hide();
		   $('.login36').show();
		}
		);
			
		
		$('#indv').click(function(e) {
          $('.login8').show();
		   $('.login2').hide();
        }
		);
		$('#indback').click(function(e) {
          $('.login8').hide();
		   $('.login2').show();
        }
		);	
		
		$('#market').click(function(e) {
          $('.login5').show();
		   $('.login2').hide();
        }
		);
		$('#').click(function(e) {
          $('.login3').hide();
		   $('.login2').show();
        }
		);
		
		

        
        
        
      });	   
	   