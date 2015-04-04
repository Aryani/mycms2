<?php
require_once('includes/cmsApplication.php');
class TodolistApplication extends CmsApplication {

	function addtodotask()
	{
		//echo "di sini akan ditambahkan task baru ke dalam todolist pada database";
		echo '<pre>';print_r($_REQUEST);echo '</pre>';
	}

	function viewtodolist()
	{
		echo "di sini akan ditampilkan semua todotask dari database";
	}

	function display()
	{
		echo "<h1>ini berasal dari TODOLIST App</h1>";
		$this->displayDashboard();
	}

	private function displayDashboard()
	{
		?>
		<div><h3>Todolist Application Dashboard</h3>
			<a href="index.php?app=todolist&task=addtaskform">Add Todo Task</a>
			<br>
			<a href="#">View Todo List</a>
		</div>
		<?php
	}

	function addtaskform()
	{
		?>
		<div><h3>Todolist Application Dashboard</h3>
			<form>
				<!-- user request dengan metode POST-->
				<input type="hidden" name="app" value="todolist">
				<input type="hidden" name="task" value="addtodotask">

				<label for="title">Title</label>
				<br><input type="text" name="title">
				<p><label for="desc">Description</label>
				<br><textarea name="desc"></textarea>
				<p><input type="submit" value="Add Task">
			</form>
			<!--
			<p>
				<form>
					<input type="submit" value="      ">
				</form>
			</p>
		-->
		</div>
		<?php
	}
}
?>