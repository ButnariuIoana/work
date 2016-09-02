{{ content() }}


<div class="row">
	<div class="container-fluid"></br>
		{{ form('products/add', 'role': 'form','class':'form-horizontal') }}
		<div class = "form-group">
			<label for="name" class="col-sm-2">Name</label>
			<div  class="col-sm-10">
				<input type="text" class="form-control" name="name" value="" placeholder="Please enter name">
			</div>
		</div>	

		<div class = "form-group">
			<label for="company" class="col-sm-2">Companies</label>
			<div class="col-sm-10">
				<select name="company" class="form-control" >
				{% for company in companies %}
					<option value="{{company.getId()}}">{{company.getName()}}</option>
				{% endfor %}
				</select>			
			</div>

		</div>

		<div class = "form-group">
			<label for="price" class="col-sm-2">Price</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="price" value="" placeholder="Please enter price">
			</div>

		</div>

		<div class = "form-group">
			<label for="description" class="col-sm-2">Description</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="description" value="" placeholder="Please enter description">
			</div>
		</div>

		<div class = "form-group">
			<label for="info" class="col-sm-2">Additional Information</label>
			<div class="col-sm-10">
				<textarea name="info" class="form-control"></textarea>
			</div>
		</div>

		<div class = "form-group">
			{{ submit_button('Save', 'class': 'btn btn-primary btn-large') }}

		</div>
		<div class = "form-group">

		</div>
		<div class = "form-group">

		</div>
		<div class = "form-group">

		</div>
		<div class = "form-group">

		</div>
		<div class = "form-group">

		</div>
		<div class = "form-group">

		</div>
		<div class = "form-group">

		</div>
	</form>
</div>



</div>