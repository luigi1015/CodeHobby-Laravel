@extends('layouts.masterTemplate')

@section('title')
	CodeHobby Reference
@stop

@section('content')
	<h2>Table of Contents</h2>
	<ol>
		<li><a href="#Computers">Computers&frasl;Programming</a></li>
		<ul>
			<li><a href="#Computers-BytePrefixes">Byte Prefixes</a></li>
			<li><a href="#Computers-HTMLCharacterCodes">HTML Character Codes</a></li>
		</ul>
		<li><a href="#Programming-BasicPrograms">Basic Programs</a></li>
		<ul>
			<li><a href="#Programming-BasicHTML5">Basic HTML5 Page</a></li>
			<li><a href="#Programming-BasicC">Basic C Program</a></li>
			<li><a href="#Programming-BasicCpp">Basic C++ Program</a></li>
			<li><a href="#Programming-BasicJava">Basic Java Program</a></li>
		</ul>
	</ol>
	<hr>
	<a id="Computers"></a>
	<h3><a id="Computers-BytePrefixes">Byte Prefixes</a></h3>
	<table class="refTable">
		<tr>
			<th>Prefix</th>
			<th>Symbol</th>
			<th>Power of 2</th>
			<th>Value Power of 2</th>
			<th>Power of 10</th>
			<th>Value Power of 10</th>
		</tr>
		<tr>
			<td>kilo</td>
			<td>K</td>
			<td>2<sup>10</sup></td>
			<td>1,024</td>
			<td>10<sup>3</sup></td>
			<td>1,000</td>
		</tr>
		<tr>
			<td>mega</td>
			<td>M</td>
			<td>2<sup>20</sup></td>
			<td>1,048,576</td>
			<td>10<sup>6</sup></td>
			<td>1,000,000</td>
		</tr>
		<tr>
			<td>giga</td>
			<td>G</td>
			<td>2<sup>30</sup></td>
			<td>1,073,741,824</td>
			<td>10<sup>9</sup></td>
			<td>1,000,000,000</td>
		</tr>
		<tr>
			<td>tera</td>
			<td>T</td>
			<td>2<sup>40</sup></td>
			<td>1,099,511,627,776</td>
			<td>10<sup>12</sup></td>
			<td>1,000,000,000,000</td>
		</tr>
		<tr>
			<td>peta</td>
			<td>P</td>
			<td>2<sup>50</sup></td>
			<td>1,125,899,906,842,624</td>
			<td>10<sup>15</sup></td>
			<td>1,000,000,000,000,000</td>
		</tr>
		<tr>
			<td>exa</td>
			<td>E</td>
			<td>2<sup>60</sup></td>
			<td>1,152,921,504,606,846,976</td>
			<td>10<sup>18</sup></td>
			<td>1,000,000,000,000,000,000</td>
		</tr>
		<tr>
			<td>zetta</td>
			<td>Z</td>
			<td>2<sup>70</sup></td>
			<td>1,180,591,620,717,411,303,424</td>
			<td>10<sup>21</sup></td>
			<td>1,000,000,000,000,000,000,000</td>
		</tr>
		<tr>
			<td>yotta</td>
			<td>m</td>
			<td>2<sup>80</sup></td>
			<td>1,208,925,819,614,629,174,706,176</td>
			<td>10<sup>24</sup></td>
			<td>1,000,000,000,000,000,000,000,000</td>
		</tr>
	</table>
	<br>
	<a href="#top">Back to top</a>
	<hr>
	<h3><a id="Computers-HTMLCharacterCodes">HTML Character Codes</a></h3>
	<table class="refTable">
		<tr>
			<th>Character Description</th>
			<th>HTML Named Code</th>
			<th>HTML Numeric Code</th>
			<th>Character</th>
		</tr>
		<tr>
			<td>Non-breaking space</td>
			<td>&amp;nbsp;</td>
			<td>&amp;#160;</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>Ampersand</td>
			<td>&amp;amp;</td>
			<td>&amp;#38;</td>
			<td>&amp;</td>
		</tr>
		<tr>
			<td>Less Than</td>
			<td>&amp;lt;</td>
			<td>&amp;#60;</td>
			<td>&lt;</td>
		</tr>
		<tr>
			<td>Greater Than</td>
			<td>&amp;gt;</td>
			<td>&amp;#62;</td>
			<td>&gt;</td>
		</tr>
		<tr>
			<td>Less Than Or Equal</td>
			<td>&amp;le;</td>
			<td>&amp;#8804;</td>
			<td>&le;</td>
		</tr>
		<tr>
			<td>Greater Than Or Equal</td>
			<td>&amp;ge;</td>
			<td>&amp;#8805;</td>
			<td>&ge;</td>
		</tr>
		<tr>
			<td>Copyright</td>
			<td>&amp;copy;</td>
			<td>&amp;#169;</td>
			<td>&copy;</td>
		</tr>
		<tr>
			<td>Double Quote</td>
			<td>&amp;quot;</td>
			<td>&amp;#34;</td>
			<td>&quot;</td>
		</tr>
		<tr>
			<td>Left Single Quote</td>
			<td>&amp;lsquo;</td>
			<td>&amp;#145;</td>
			<td>&lsquo;</td>
		</tr>
		<tr>
			<td>Right Single Quote</td>
			<td>&amp;rsquo;</td>
			<td>&amp;#146;</td>
			<td>&rsquo;</td>
		</tr>
		<tr>
			<td>Left Double Quote</td>
			<td>&amp;ldquo;</td>
			<td>&amp;#147;</td>
			<td>&ldquo;</td>
		</tr>
		<tr>
			<td>Right Double Quote</td>
			<td>&amp;rdquo;</td>
			<td>&amp;#148;</td>
			<td>&rdquo;</td>
		</tr>
		<tr>
			<td>Prime (aka single quote)</td>
			<td>&amp;prime;</td>
			<td>&amp;#8242;</td>
			<td>&prime;</td>
		</tr>
		<tr>
			<td>Double Prime (aka double quote)</td>
			<td>&amp;Prime;</td>
			<td>&amp;#8243;</td>
			<td>&Prime;</td>
		</tr>
		<tr>
			<td>En Dash</td>
			<td>&amp;ndash;</td>
			<td>&amp;#150;</td>
			<td>&ndash;</td>
		</tr>
		<tr>
			<td>Em Dash</td>
			<td>&amp;mdash;</td>
			<td>&amp;#151;</td>
			<td>&mdash;</td>
		</tr>
		<tr>
			<td>Trademark</td>
			<td>&amp;trade;</td>
			<td>&amp;#153;</td>
			<td>&trade;</td>
		</tr>
		<tr>
			<td>Inverted Exclamation Mark</td>
			<td>&amp;iexcl;</td>
			<td>&amp;#161;</td>
			<td>&iexcl;</td>
		</tr>
		<tr>
			<td>Inverted Question Mark</td>
			<td>&amp;iquest;</td>
			<td>&amp;#191;</td>
			<td>&iquest;</td>
		</tr>
		<tr>
			<td>Micro Sign</td>
			<td>&amp;micro;</td>
			<td>&amp;#181;</td>
			<td>&micro;</td>
		</tr>
		<tr>
			<td>tilde (lowercase t)</td>
			<td>&amp;tilde;</td>
			<td>&amp;#152;</td>
			<td>&tilde;</td>
		</tr>
		<tr>
			<td>Tilde (uppercase t)</td>
			<td>&amp;Tilde;</td>
			<td>&amp;#126;</td>
			<td>&Tilde;</td>
		</tr>
		<tr>
			<td>Spade card suit</td>
			<td>&amp;spades;</td>
			<td>&amp;#9824;</td>
			<td>&spades;</td>
		</tr>
		<tr>
			<td>Clubs card suit</td>
			<td>&amp;clubs;</td>
			<td>&amp;#9827;</td>
			<td>&clubs;</td>
		</tr>
		<tr>
			<td>Diamonds card suit</td>
			<td>&amp;diams;</td>
			<td>&amp;#9830;</td>
			<td>&diams;</td>
		</tr>
		<tr>
			<td>Hearts card suit</td>
			<td>&amp;hearts;</td>
			<td>&amp;#9829;</td>
			<td>&hearts;</td>
		</tr>
		<tr>
			<td>Left arrow</td>
			<td>&amp;larr;</td>
			<td>&amp;#8592;</td>
			<td>&larr;</td>
		</tr>
		<tr>
			<td>Right arrow</td>
			<td>&amp;rarr;</td>
			<td>&amp;#8594;</td>
			<td>&rarr;</td>
		</tr>
		<tr>
			<td>Up arrow</td>
			<td>&amp;uarr;</td>
			<td>&amp;#8593;</td>
			<td>&uarr;</td>
		</tr>
		<tr>
			<td>Down arrow</td>
			<td>&amp;darr;</td>
			<td>&amp;#8595;</td>
			<td>&darr;</td>
		</tr>
		<tr>
			<td>Dagger</td>
			<td>&amp;dagger;</td>
			<td>&amp;#134;</td>
			<td>&dagger;</td>
		</tr>
		<tr>
			<td>Double Dagger</td>
			<td>&amp;Dagger;</td>
			<td>&amp;#135;</td>
			<td>&Dagger;</td>
		</tr>
		<tr>
			<td>Cent</td>
			<td>&amp;cent;</td>
			<td>&amp;#162;</td>
			<td>&cent;</td>
		</tr>
		<tr>
			<td>Pound</td>
			<td>&amp;pound;</td>
			<td>&amp;#163;</td>
			<td>&pound;</td>
		</tr>
		<tr>
			<td>Yen</td>
			<td>&amp;yen;</td>
			<td>&amp;#165;</td>
			<td>&yen;</td>
		</tr>
		<tr>
			<td>Euro</td>
			<td>&amp;euro;</td>
			<td>&amp;#8364;</td>
			<td>&euro;</td>
		</tr>
		<tr>
			<td>Slash</td>
			<td>&amp;frasl;</td>
			<td>&amp;#47;</td>
			<td>&frasl;</td>
		</tr>
		<tr>
			<td>Backslash</td>
			<td>N/A</td>
			<td>&amp;#92;</td>
			<td>&#92;</td>
		</tr>
		<tr>
			<td>Ellipses</td>
			<td>&amp;hellip;</td>
			<td>&amp;#133;</td>
			<td>&hellip;</td>
		</tr>
		<tr>
			<td>Degree</td>
			<td>&amp;deg;</td>
			<td>&amp;#176;</td>
			<td>&deg;</td>
		</tr>
		<tr>
			<td>Plus or Minus Sign</td>
			<td>&amp;plusmn;</td>
			<td>&amp;#177;</td>
			<td>&plusmn;</td>
		</tr>
		<tr>
			<td>Section Sign</td>
			<td>&amp;sect;</td>
			<td>&amp;#167;</td>
			<td>&sect;</td>
		</tr>
		<tr>
			<td>Division Sign</td>
			<td>&amp;divide;</td>
			<td>&amp;#247;</td>
			<td>&divide;</td>
		</tr>
		<tr>
			<td>Approximately Equal To (Wavy Equals)</td>
			<td>&amp;asymp;</td>
			<td>&amp;#8776;</td>
			<td>&asymp;</td>
		</tr>
		<tr>
			<td>Not Equal To</td>
			<td>&amp;ne;</td>
			<td>&amp;#8800;</td>
			<td>&ne;</td>
		</tr>
		<tr>
			<td>Pilcrew Sign (Paragraph Sign)</td>
			<td>&amp;para;</td>
			<td>&amp;#182;</td>
			<td>&para;</td>
		</tr>
		<tr>
			<td>Not Sign</td>
			<td>&amp;not;</td>
			<td>&amp;#172;</td>
			<td>&not;</td>
		</tr>
		<tr>
			<td>Registered Trademark</td>
			<td>&amp;reg;</td>
			<td>&amp;#174;</td>
			<td>&reg;</td>
		</tr>
		<tr>
			<td>Broken Vertical Bar</td>
			<td>&amp;brvbar;</td>
			<td>&amp;#166;</td>
			<td>&brvbar;</td>
		</tr>
		<tr>
			<td>Overline</td>
			<td>&amp;oline;</td>
			<td>&amp;#8254;</td>
			<td>&oline;</td>
		</tr>
		<tr>
			<td>Lower case Latin letter AE</td>
			<td>&amp;aelig;</td>
			<td>&amp;#230;</td>
			<td>&aelig;</td>
		</tr>
		<tr>
			<td>Capital Latin letter AE</td>
			<td>&amp;AElig;</td>
			<td>&amp;#198;</td>
			<td>&AElig;</td>
		</tr>
		<tr>
			<td>Lower case O with Slash</td>
			<td>&amp;oslash;</td>
			<td>&amp;#248;</td>
			<td>&oslash;</td>
		</tr>
		<tr>
			<td>Capital O with Slash</td>
			<td>&amp;Oslash;</td>
			<td>&amp;#216;</td>
			<td>&Oslash;</td>
		</tr>
		<tr>
			<td>Umlaut</td>
			<td>&amp;uml;</td>
			<td>&amp;#168;</td>
			<td>&uml;</td>
		</tr>
		<tr>
			<td>Capital Delta</td>
			<td>&amp;Delta;</td>
			<td>&amp;#916;</td>
			<td>&Delta;</td>
		</tr>
		<tr>
			<td>Lower Case Delta</td>
			<td>&amp;delta;</td>
			<td>&amp;#948;</td>
			<td>&delta;</td>
		</tr>
		<tr>
			<td>Left Double Angle</td>
			<td>&amp;laquo;</td>
			<td>&amp;#171;</td>
			<td>&laquo;</td>
		</tr>
		<tr>
			<td>Right Double Angle</td>
			<td>&amp;raquo;</td>
			<td>&amp;#187;</td>
			<td>&raquo;</td>
		</tr>
		<tr>
			<td>Left Single Angle</td>
			<td>&amp;lsaquo;</td>
			<td>&amp;#139;</td>
			<td>&lsaquo;</td>
		</tr>
		<tr>
			<td>Right Single Angle</td>
			<td>&amp;rsaquo;</td>
			<td>&amp;#155;</td>
			<td>&rsaquo;</td>
		</tr>
		<tr>
			<td>Empty Set</td>
			<td>&amp;empty;</td>
			<td>&amp;#8709;</td>
			<td>&empty;</td>
		</tr>
		<tr>
			<td>N-ary Summation</td>
			<td>&amp;sum;</td>
			<td>&amp;#8721;</td>
			<td>&sum;</td>
		</tr>
		<tr>
			<td>Spacing Macron - Overline</td>
			<td>&amp;macr;</td>
			<td>&amp;#175;</td>
			<td>&macr;</td>
		</tr>
		<tr>
			<td>Superscript 1</td>
			<td>&amp;sup1;</td>
			<td>&amp;#185;</td>
			<td>&sup1;</td>
		</tr>
		<tr>
			<td>Superscript 2</td>
			<td>&amp;sup2;</td>
			<td>&amp;#178;</td>
			<td>&sup2;</td>
		</tr>
		<tr>
			<td>Superscript 3</td>
			<td>&amp;sup3;</td>
			<td>&amp;#178;</td>
			<td>&sup3;</td>
		</tr>
		<tr>
			<td>Fraction one quarter</td>
			<td>&amp;frac14;</td>
			<td>&amp;#188;</td>
			<td>&frac14;</td>
		</tr>
		<tr>
			<td>Fraction one half</td>
			<td>&amp;frac12;</td>
			<td>&amp;#189;</td>
			<td>&frac12;</td>
		</tr>
		<tr>
			<td>Fraction three fourths</td>
			<td>&amp;frac34;</td>
			<td>&amp;#190;</td>
			<td>&frac34;</td>
		</tr>
		<tr>
			<td>Feminine Ordinal Indicator</td>
			<td>&amp;ordf;</td>
			<td>&amp;#170;</td>
			<td>&ordf;</td>
		</tr>
		<tr>
			<td>Masculine Ordinal Indicator</td>
			<td>&amp;ordm;</td>
			<td>&amp;#186;</td>
			<td>&ordm;</td>
		</tr>
		<tr>
			<td>Spacing Acute Accent</td>
			<td>&amp;acute;</td>
			<td>&amp;#180;</td>
			<td>&acute;</td>
		</tr>
		<tr>
			<td>Light Checkmark</td>
			<td>N/A</td>
			<td>&amp;#10003;</td>
			<td>&#10003;</td>
		</tr>
		<tr>
			<td>Heavy Checkmark</td>
			<td>N/A</td>
			<td>&amp;#10004;</td>
			<td>&#10004;</td>
		</tr>
		<tr>
			<td>Female Indicator</td>
			<td>N/A</td>
			<td>&amp;#9792;</td>
			<td>&#9792;</td>
		</tr>
		<tr>
			<td>Male Indicator</td>
			<td>N/A</td>
			<td>&amp;#9794;</td>
			<td>&#9794;</td>
		</tr>
		<tr>
			<td>Quarter Note</td>
			<td>N/A</td>
			<td>&amp;#9833;</td>
			<td>&#9833;</td>
		</tr>
		<tr>
			<td>Eighth Note</td>
			<td>N/A</td>
			<td>&amp;#9834;</td>
			<td>&#9834;</td>
		</tr>
		<tr>
			<td>Double Eighth Note</td>
			<td>N/A</td>
			<td>&amp;#9836;</td>
			<td>&#9836;</td>
		</tr>
		<tr>
			<td>Flat</td>
			<td>N/A</td>
			<td>&amp;#9837;</td>
			<td>&#9837;</td>
		</tr>
		<tr>
			<td>Sharp</td>
			<td>N/A</td>
			<td>&amp;#9839;</td>
			<td>&#9839;</td>
		</tr>
		<tr>
			<td>Bullet Point</td>
			<td>&amp;bull;</td>
			<td>&amp;#8226;</td>
			<td>&bull;</td>
		</tr>
		<tr>
			<td>Middle Dot</td>
			<td>&amp;middot;</td>
			<td>&amp;#183;</td>
			<td>&middot;</td>
		</tr>
	</table>
	<br>
	<a href="#top">Back to top</a>
	<hr>
	<h3><a id="Programming-BasicPrograms">Basic Programs</a></h3>
	<a id="Programming-BasicHTML5"><h4>HTML5</h4></a>
	<fieldset class="codeFieldSet">
		<legend>Basic HTML5 Page</legend>
		<code>
			<pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;UTF-8&quot;&gt;
		&lt;title&gt;This is the Title&lt;&frasl;title&gt;
		&lt;link rel=&quot;stylesheet&quot; type=&quot;text&frasl;css&quot; href=&quot;cssfile.css&quot;&gt;
		&lt;script src=&quot;javascriptfile.js&quot;&gt;&lt;/script&gt;
	&lt;&frasl;head&gt;
	&lt;body&gt;
		This is the body of the page. Put the stuff you want to show up on screen here.
	&lt;&frasl;body&gt;
&lt;&frasl;html&gt;
			</pre>
		</code>
	</fieldset>
	<br>
	<a href="#top">Back to top</a>
	<hr>
	<a id="Programming-BasicC"><h4>C</h4></a>
	<fieldset class="codeFieldSet">
		<legend>Basic C Program</legend>
		<code>
			<pre>
#include &lt;stdio.h&gt;

int main( int argc, char *argv[] )
{
	printf( "Hello World!" );
	return 0;
}
			</pre>
		</code>
	</fieldset>
	<br>
	To run the C program, you need to compile it first.
	<br>
	If you have GCC installed and can use the command line, you should be able to compile the program with a command like:
	<br>
	<code>gcc -o helloworld helloworld.c</code>
	<br>
	Just replace &quot;<code>helloworld.c</code>&quot; with the filename of your code file.
	<br>
	This should create an executable file called <code>helloworld</code>. That's the file you can run to execute your program.
	<br>
	Alternatively, you can also compile with debugging info and showing all warnings with <code>gcc -Wall -g -o helloworld helloworld.c</code>
	<br>
	<br>
	On Windows, you might also need to change &quot;<code>-o helloworld</code>&quot; to &quot;<code>-o helloworld.exe</code>&quot;.
	<br>
	However, if you are programming in Windows, you're probably using an IDE instead of GCC on the command line, so the IDE will probably do this compilation step for you.
	<br>
	<br>
	<a href="#top">Back to top</a>
	<hr>
	<a id="Programming-BasicCpp"><h4>C++</h4></a>
	<fieldset class="codeFieldSet">
		<legend>Basic C++ Program</legend>
		<code>
			<pre>
#include &lt;iostream&gt;

class BasicClass
{
	private:

	protected:

	public:
		void sayHello();
};

void BasicClass::sayHello()
{
	std::cout &lt;&lt; "Hello World!" &lt;&lt; std::endl;
}

int main( int argc, char *argv[] )
{
	BasicClass bc;
	bc.sayHello();
	return 0;
}
			</pre>
		</code>
	</fieldset>
	<br>
	To run the C++ program, you need to compile it first.
	<br>
	If you have GCC with g++ installed and can use the command line, you should be able to compile the program with a command like:
	<br>
	<code>g++ -o helloworld helloworld.cpp</code>
	<br>
	Just replace &quot;<code>helloworld.cpp</code>&quot; with the filename of your code file.
	<br>
	This should create an executable file called <code>helloworld</code>. That's the file you can run to execute your program.
	<br>
	Alternatively, you can also compile with debugging info and showing all warnings with <code>g++ -Wall -g -o helloworld helloworld.cpp</code>
	<br>
	<br>
	On Windows, you might also need to change &quot;<code>-o helloworld</code>&quot; to &quot;<code>-o helloworld.exe</code>&quot;.
	<br>
	However, if you are programming in Windows, you're probably using an IDE instead of GCC on the command line, so the IDE will probably do this compilation step for you.
	<br>
	<br>
	<a href="#top">Back to top</a>
	<hr>
	<a id="Programming-BasicJava"><h4>Java</h4></a>
	<fieldset class="codeFieldSet">
		<legend>Basic Java Program</legend>
		<code>
			<pre>
public class HelloWorld
{
	private String displayText = "";

	/**
	 * Constructor. Sets the displayText string.
	 */
	public HelloWorld()
	{
		displayText = "Hello World!";
	}

	/**
	 * Returns the text to display.
	 *
	 * @return The text to display.
	 */
	private String getTextToDisplay()
	{
		return displayText;
	}

	/**
	 * This is the method that is run when this program is run on the command line.
	 * All it really does is display what getTextToDisplay() returns.
	 * Since the method is static, it creates a HelloWorld object to gain access to the getTextToDisplay() method.
	 *
	 * @param args The command line arguments when the program is run.
	 */
	public static void main( String[] args )
	{
		HelloWorld hw = new HelloWorld();
		System.out.println( hw.getTextToDisplay() );
	}
}
			</pre>
		</code>
	</fieldset>
	<br>
	To run the Java program, you need to compile it first.
	<br>
	If you have the standard Java JDK (not just the JRE) installed and can use the command line, you should be able to compile the program with a command like:
	<br>
	<br>
	<code>javac HelloWorld.java</code>
	<br>
	<br>
	Just replace "HelloWorld.java" with the filename of your code, which should match the name of the class inside and probably should have the filename extension "java".
	<br>
	That will create a class file, which is the Java bytecode version of the class.
	<br>
	Then you'll need to run the resulting bytecode using the JRE to run the program.
	<br>
	If you have the standard Java JRE or standard Java JDK installed an can use the command line, you should be able to run the program using a command like:
	<br>
	<br>
	<code>java HelloWorld</code>
	<br>
	<br>
	Just replace "HelloWorld" with the name of the class, which should match the filename of the class file without the "class" filename extension.
	<br>
	<br>
	<a href="#top">Back to top</a>
	<hr>
@stop
