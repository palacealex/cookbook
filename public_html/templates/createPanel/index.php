<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/php/preload.php');
$logic = new uploadLogic();

$ingredients = $logic->outputFacetOptions('recipe:Food');

?>

<header>
	<h3><a class="panelHeader">Upload Recipe<span class="indicator">-</span></a></h3>
</header>
<section class="wrapper">
	<p class="note">Please complete the form below to upload a recipe</p>
	<article>
		<form name="recipeCreate">
			<input type="hidden" name="formID" value="recipeCreate"/>

			<label for="label">*Name</label>
			<input type="text" name="label" placeholder="Name"/>

			<label for="image">Attach an Image<span class="note">(optional)</span></label>
			<input type="file" name="image" id="fileupload"/>
			
			<label for="comment">*Description</label>
			<textarea name="comment"></textarea>

			<label for="cuisine">*Cuisine Type</label>
			<select name="cuisine" multiple>
				<?php echo $logic->outputFacetOptions('recipe:Cuisine'); ?>
			</select>

			<label for="course">*Course</label>
			<select name="course" multiple>
				<?php echo $logic->outputFacetOptions('recipe:Course'); ?>
			</select>

			<label for="ingredients">*Ingredients (please enter at least two)</label>
			
			<div class="ingredient">
				<select name="ingredients[]" class="half-width">
					<?php echo $ingredients; ?>
				</select>
				<input type="text" name="quantity[]" placeholder="Quantity" />
			</div>
			
			<div class="ingredient">
				<select name="ingredients[]" class="half-width">
					<?php echo $ingredients; ?>
				</select>
				<input type="text" name="quantity[]" placeholder="Quantity" />
			</div>

			<p class="note"><a class="clone-ingredient">Add another</a></p>

			<label for="steps">*Steps (please enter at least one)</label>
			<div class="step">
				<input type="text" name="steps[]" placeholder="Add a step"/>
			</div>

			<p class="note"><a class="clone-step">Add another</a></p>

			<input type="submit" value="Submit Recipe"/>
		</form>
	</article>
</section>