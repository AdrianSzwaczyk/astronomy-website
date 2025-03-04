<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:output method="html" indent="yes"/>

    <xsl:template match="/">
        <html>
			<head>
				<meta charset="UTF-8" />
				<title>Astronomy</title>
				<meta name="viewport" content="width=device-width, initial-scale=1.0" />
				<!-- <link rel="stylesheet" href="index.css" /> -->
			</head>
			<body>
				<div id="wrapper">
					<header>
						<h1>Astronomy</h1>
					</header>

					<xsl:call-template name="nav"/>

					<div id="content">
						<h2 id="scientists">Scientists</h2>
						<!-- a place for information about hypertext scientists -->
						<xsl:apply-templates select="hypertext/people/person"/>

						<h2 id="systems">Systems</h2>
						<!-- a place for information about hypertext systems -->
						<xsl:apply-templates select="hypertext/systemList/system"/>

					</div>
					<!-- end content -->
				</div>
				<!-- end wrapper -->
				<footer>
					<xsl:apply-templates select="hypertext/author"/>	<!-- wywołanie szablonu pozwalającego na wyświetlenie informacji o imieniu oraz nazwisku studenta -->
				</footer>
			</body>
		</html>
    </xsl:template>

    <xsl:template name="nav">
		<nav>
			<ul>
				<li>
					<a href="#mercury">Mercury</a>
				</li>
				<li>
					<a href="#venus">Venus</a>
				</li>
			</ul>
		</nav>
	</xsl:template>

    <xsl:template match="stars|planets|artificial-objects">
        <div id="stars">
            <h2><xsl:variable name="objects" select="parent::node/@nodeName" /></h2>
        </div>
    </xsl:template>

    <xsl:template match="solar-system">
    </xsl:template>

    <xsl:template match="universe">
    </xsl:template>
    <xsl:template match="">
    </xsl:template>
    <xsl:template match="">
    </xsl:template>
</xsl:stylesheet>