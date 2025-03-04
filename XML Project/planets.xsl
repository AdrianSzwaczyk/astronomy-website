<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:output method="html" indent="yes"/>

	<xsl:variable name="page">
		<meta charset="UTF-8" />
		<title>Astronomy</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="planets.css"/>
	</xsl:variable>

    <xsl:template match="/">
        <html>
			<head>
				<xsl:copy-of select="$page"/>
			</head>
			<body>
					<header>
						<h1>Astronomy</h1>
					</header>
					<xsl:call-template name="nav"/>
					<div id="content">
						<xsl:apply-templates select="space-objects/stars"/>
						<xsl:apply-templates select="space-objects/planets"/>
						<xsl:apply-templates select="space-objects/artificial-objects"/>
					</div>
			</body>
		</html>
    </xsl:template>

    <xsl:template name="nav">
		<nav>
			<a href="#top" id="t">Top</a><br/>
			<xsl:for-each select="space-objects/planets/solar-system/(inner-planets|outer-planets)/*">
					<xsl:number format="1. "/><a href="#{data/name}"><xsl:value-of select="data/name"/></a><br/>
			</xsl:for-each>
		</nav>
	</xsl:template>

    <xsl:template match="stars|planets|artificial-objects">
        <div id="{name(.)}">
            <h2>
				<xsl:value-of select="concat(translate(substring(name(.), 1, 1), 'abcdefghijklmnopqrstuvwxyz', 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'), substring(name(.), 2))"/>
			</h2>
			<xsl:apply-templates select="solar-system"/>
			<xsl:apply-templates select="universe"/>
        </div>
    </xsl:template>

    <xsl:template match="solar-system|universe">
		<div class="{name(.)}">
			<xsl:apply-templates select="inner-planets"/>
			<xsl:apply-templates select="outer-planets"/>
			<xsl:apply-templates select="star"/>
			<xsl:apply-templates select="spacecraft"/>
		</div>
    </xsl:template>

	<xsl:template match="inner-planets|outer-planets">
		<div id="{name(.)}">
			<h3>
				<xsl:choose>
					<xsl:when test="name(.) = 'inner-planets'">
						Inner planets
					</xsl:when>
					<xsl:otherwise>
						Outer planets
					</xsl:otherwise>
				</xsl:choose>
			</h3>
			<xsl:apply-templates select="planet"/>
		</div>
	</xsl:template>

	<xsl:template match="star|spacecraft">
		<div class="{name(.)}" id="{./data/name}">
			<xsl:apply-templates select="image"/>
			<xsl:apply-templates select="data"/>
			<xsl:apply-templates select="wikipedia-link"/>
		</div>
	</xsl:template>

	<xsl:template match="planet[@type='gas-giant']">
		<div class="{name(.)}" id="{./data/name}" style="border: 3px solid brown; border-radius: 10px;">
			<xsl:apply-templates select="image"/>
			<xsl:apply-templates select="data"/>
			<p>I'm a gas giant!</p>
		</div>
	</xsl:template>

	<xsl:template match="planet[@type='terrestial']">
		<div class="{name(.)}" id="{./data/name}" style="border: 3px solid blue; border-radius: 10px;">
			<xsl:apply-templates select="image"/>
			<xsl:apply-templates select="data"/>
			<p>I'm a terrestial planet!</p>
		</div>
	</xsl:template>

	<xsl:template match="planet[last()]">
		<div class="{name(.)}" id="{./data/name}" style="border: 3px solid black; border-radius: 10px;">
			<h3><xsl:value-of select="data/name"/></h3>
			<xsl:apply-templates select="image"/>
			<p>I'm the last <xsl:value-of select="@type"/>!</p>
		</div>
	</xsl:template>

	<xsl:template match="data">
		<div class="data">
			<xsl:choose>
				<xsl:when test="name(..) = 'planet'">
					<h3><a><xsl:attribute name="href">
						<xsl:value-of select="../wikipedia-link/@source"/>
					</xsl:attribute><xsl:value-of select="name"/></a></h3>
				</xsl:when>
				<xsl:otherwise>
					<h3><xsl:value-of select="name"/></h3>
				</xsl:otherwise>
			</xsl:choose>
			<table>
				<xsl:apply-templates select="physical-properties"/>
			</table>
			<p><xsl:value-of select="description"/></p>
			<xsl:apply-templates select="year"/>
			<xsl:apply-templates select="location"/>
			<xsl:apply-templates select="countries"/>
		</div>
	</xsl:template>

	<xsl:template match="physical-properties">
			<xsl:for-each select="./*">
				<xsl:sort select="name(.)"/>
				<tr>
					<th><xsl:number value="position()" format="A. "/><xsl:value-of select="concat(translate(substring(name(.), 1, 1), 'abcdefghijklmnopqrstuvwxyz', 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'), substring(name(.), 2))"/></th>
					<td><xsl:choose>
							<xsl:when test="name(.) = 'radius'">
								<xsl:value-of select='format-number(., "###,###")'/>
							</xsl:when>
							<xsl:when test="name(.) = 'gravity'">
								<xsl:value-of select='format-number(., "##0.##")'/>
							</xsl:when>
							<xsl:otherwise>
								<xsl:value-of select="."/>
							</xsl:otherwise>
						</xsl:choose>
						<xsl:if test="not((name(.) = 'orbital-period') or (name(.) = 'rotation-period'))">[<xsl:value-of select="./@units"/>]</xsl:if></td>
				</tr>
			</xsl:for-each>
	</xsl:template>

	<xsl:template match="image">
		<xsl:variable name="name" select="../data/name"/>
		<img class="img">
			<xsl:attribute name="title">
				<xsl:value-of select="$name"/>
			</xsl:attribute>
			<xsl:attribute name="src">
				<xsl:value-of select="@source"/>
			</xsl:attribute>
			<xsl:attribute name="alt">
				<xsl:value-of select="$name"/>
			</xsl:attribute>
		</img>
	</xsl:template>

	<xsl:template match="wikipedia-link">
		<a><xsl:attribute name="href">
				<xsl:value-of select="@source"/>
			</xsl:attribute>
			<xsl:value-of select="../data/name"/></a>
	</xsl:template>

	<xsl:template match="year">
		<p>Year: <xsl:value-of select="."/></p>
	</xsl:template>

	<xsl:template match="location">
		<p>Location: <xsl:value-of select="."/></p>
	</xsl:template>

	<xsl:template match="countries">
		<p>Countries involved: <xsl:value-of select="translate(., ' ', ', ')"/></p>
	</xsl:template>

</xsl:stylesheet>