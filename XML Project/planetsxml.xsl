<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output method="xml" indent="yes"/>

<xsl:template match="/">
    <extraterrestrial-bodies>
        <xsl:apply-templates select="space-objects/stars"/>
        <xsl:apply-templates select="space-objects/planets"/>
        <xsl:apply-templates select="space-objects/artificial-objects"/>
    </extraterrestrial-bodies>
</xsl:template>

<xsl:template match="stars">
    <stars>
        <xsl:apply-templates select="(solar-system|universe)/star"/>
    </stars>
</xsl:template>

<xsl:template match="planets">
    <solar-system-planets>
        <xsl:apply-templates select="solar-system/(inner-planets|outer-planets)/planet"/>
    </solar-system-planets>
</xsl:template>

<xsl:template match="planet">
    <xsl:element name="{data/name}">
        <xsl:attribute name="{@type}">yes</xsl:attribute>
        <xsl:choose>
            <xsl:when test="data/name = 'Earth'">
                <xsl:attribute name="visited-by-human">yes</xsl:attribute>
            </xsl:when>
            <xsl:otherwise>
                <xsl:attribute name="visited-by-human">no</xsl:attribute>
            </xsl:otherwise>
        </xsl:choose>
        <basic-info>
            <radius>
                <xsl:attribute name="measure">km</xsl:attribute>
                <xsl:value-of select="data/physical-properties/radius"/>
            </radius>
            <mass>
                <xsl:attribute name="measure">kg</xsl:attribute>
                <xsl:value-of select="data/physical-properties/mass"/>
            </mass>
        </basic-info>
        <link source="{wikipedia-link/@source}"/>
    </xsl:element>
</xsl:template>

<xsl:template match="artificial-objects">
    <spacecrafts>
        <xsl:apply-templates select="(solar-system|universe)/spacecraft"/>
    </spacecrafts>
</xsl:template>

<xsl:template match="spacecraft">
    <xsl:element name="{@type}">
        <xsl:choose>
            <xsl:when test="@working = 'yes'">
                <xsl:attribute name="active">yes</xsl:attribute>
            </xsl:when>
            <xsl:otherwise>
                <xsl:attribute name="active">no</xsl:attribute>
            </xsl:otherwise>
        </xsl:choose>
        <xsl:apply-templates select="data/name"/>
        <xsl:apply-templates select="data/(year|location)"/>
    </xsl:element>
</xsl:template>

<xsl:template match="star">
    <star>
        <detailed-info>
            <xsl:apply-templates select="data"/>
        </detailed-info>
    </star>
</xsl:template>

<xsl:template match="data">
    <xsl:copy-of select="* except description" copy-namespaces="no"/>
</xsl:template>

<xsl:template match="year|location">
    <xsl:copy copy-namespaces="no">
        <xsl:apply-templates/>
    </xsl:copy>
</xsl:template>

<xsl:template match="name">
    <xsl:copy copy-namespaces="no">
        <xsl:apply-templates/>
    </xsl:copy>
</xsl:template>


</xsl:stylesheet>