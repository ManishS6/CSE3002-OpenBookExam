<xsl:for-each select="booklist/book">
<tr>
<td><xsl:value-of select="title" /></td>
<xsl:choose>
<xsl:when test="price &gt; 10">
<td bgcolor="#ff00ff">
<xsl:value-of select="author" />
</td>
</xsl:when>
<xsl:otherwise>
<td><xsl:value-of select="author" /><td>
</xsl:otherwise>
</xsl:choose>
</tr>
</xsl:for-each>