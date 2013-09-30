<?php echo $this->Html->script('jquery.validate');?>
<style>
ul.left_margin{position:relative;margin: 0 0 20px;}
ul.left_margin label.error{color:#ff0000;position:absolute;margin-top:5px; text-transform:none;top:298px;width:auto;left:0px;}
</style>
 <!--Upper Box-->
	
          <!--Upper Box End-->
       <div class="top_heading">
         <h1>PERSONALIZE YOUR VOLUNTEERING EXPERIENCE</h1>
          <h3>Filter organizations based upon skill sets they are looking for, and contact them to do more good.</h3>
            
           </div>
       
       
     <div class="wrapper_left_section">
         
         
         
       <!--table-->
       <div class="vol_table">                        
           
         <div class="section">
              <?php echo $this->Form->create('User',array('id'=>'personalize'));?>     
               <div class="signup_form_blue">
                 <label name="name">SARCH SKILL SET :<br />
                   <span>(choose maximum  3 )</span></label>
                 <ul class="left_margin">
                   <?php
			//pr($temp_skills);die;
                            $i = 1;
			    $k = 1;
                            foreach($skill_sets as $skill_set):			    
			   			 ?>
                        	<li <?php if($k == 1) echo 'class="first"';?>>
                            	<input type="checkbox" id="a<?php echo $i;?>" name="data[SkillSet][SkillSet][]" value="<?php echo $skill_set['SkillSet']['id'];?>"
				<?php
                                if($this->request->is('post') || $this->request->is('put')){
				    if(isset($this->request->data['SkillSet']['SkillSet'])){
					if(in_array($skill_set['SkillSet']['id'], $this->request->data['SkillSet']['SkillSet'])) {
					   echo "checked='checked'";
				        } 
				    }
			        }
			        else{
				    if(isset($this->request->data['SkillSet'])){
					if(in_array($skill_set['SkillSet']['id'], $temp_skills)) {
					   echo "checked='checked'";
				        } 
				    }
			       }			        
                               ?>/>
                                <label for="a<?php echo $i;?>" class="checkbox-label"><span><img alt="<?php echo $skill_set['SkillSet']['name'];?>" src="<?php echo $this->webroot;?>img/<?php echo $skill_set['SkillSet']['picture_url'];?>" /></span></label>                               
                            </li>
                    <?php
			    	if($k == 3) $k = 0;
			   		$k++;
                    $i++;
                    endforeach;
                    ?>                
                   </ul>
                 </div>
               <div class="clr"></div>
               <div class="contact_form">
                 <div class="submit_button1">
		    <input type="submit" class="srch_btn" value="" />             
                   </div>
                 
                 </div>                 
                <?php echo $this->Form->end();?>
                <script type='text/javascript' language='javascript'>
$().ready(function() {            
        // validate signup form on keyup and submit
        $("#personalize").validate({
            rules: {                                               
                        "data[SkillSet][SkillSet][]": {
                        required : true,
						maxlength:3
                        }                        
                    }
                    ,
                messages:{                             
                        "data[SkillSet][SkillSet][]": {
                            required : 'Please select atleast one skillset',
							maxlength: 'Please select maximum three skills'
                        }
            },
	    errorElement: 'label',
            errorClass: 'error help-block',
            errorPlacement: function(error, element){
                if(element.is('input[type="checkbox"]')){
                    error.insertAfter(element.parent());
                } else {
                    error.insertAfter(element);
                }
            },                                        
        });                    
});
</script>
                
                
               
               
             </div>         
       </div>          
       </div>
                    
          <div class="wrapper_mid_border"></div>
              
     <div class="wrapper_right_section">
          
           <div class="right_section_inner">  
             
             <h1>SPONSORS</h1>
               <div class="sponser_outer">
                  <div class="sponser_inner"><span class="sponsors_text"> Sed ultricies volutpat tempor. Cras non lacus at enim venenatis hendrerit. Morbi lacus arcu, luctus sollicitudin molestie vulputate, sagittis eget quam. Praesent eget massa purus. Mauris fermentum ante quis mauris pretium, eu interdum metus fringilla. Curabitur lacinia vulputate tincidunt.</span></div>
                     <div class="tip"></div>
        <div class="add_section">
            <div class="section1">
                <div class="black_text">
                     THE CHILDREN�S HOSPITAL
OF PHILADELPHIA
                      </div>
                    <div class="black_text_thin">3401 Civic Center Blvd. Philadelphia PA
(215) 590-1000</div> 
<a href="#" class="orange_butt">VOLUNTEER THROUGH SOCEANA</a> 
                 </div>
              <div class="section2"><img src="<?php echo $this->webroot;?>img/ch_image.png" alt="" /></div>
              </div>   
                     
           
                   </div>
                   <div class="add_img_outer"><img src="<?php echo $this->webroot;?>img/volunteer.png" width="350" alt="" />
                  
                 </div>
                   
                 <div class="sponser_outer">
                   <div class="sponser_inner"><span class="sponsors_text"> Sed ultricies volutpat tempor. Cras non lacus at enim venenatis hendrerit. Morbi lacus arcu, luctus sollicitudin molestie vulputate, sagittis eget quam. Praesent eget massa purus. Mauris fermentum ante quis mauris pretium, eu interdum metus fringilla. Curabitur lacinia vulputate tincidunt.</span></div>
                     <div class="tip"></div>
        <div class="add_section">
            <div class="section1">
                <div class="black_text">
                 MANNA ON MAIN STREET
                      </div>
                    <div class="black_text_thin">713 W. Main Street. Lansdale PA
(215) 855-5454</div> 
<a href="#" class="orange_butt">VOLUNTEER THROUGH SOCEANA</a> 
                 </div>
              <div class="section2"><img src="<?php echo $this->webroot;?>img/main_steel_img.png" alt="" /></div>
              </div>          
             </div>                    
             </div>
             <a href="#" class="add_text">Advertise with Soceana</a>
               
         <div class="clr"></div>       
</div>       