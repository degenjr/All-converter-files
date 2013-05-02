''' <summary>
''' Fuel Efficiency Converter
''' frmFuelEfficiencyConverter.vb
''' Daniel Manley
''' 28 Jan 2013
''' Program to convert MPG to KPL
''' </summary>
''' <remarks></remarks>
Public Class frmFuelEfficiencyConverter
    ''' <summary>
    ''' When the user clicks this button, the program will calculate the KPL based on the MPG that was entered
    ''' </summary>
    ''' <param name="sender"></param>
    ''' <param name="e"></param>
    ''' <remarks></remarks>
    Private Sub Btnconvert_Click(sender As System.Object, e As System.EventArgs) Handles Btnconvert.Click
        ' create constants for our conversion values
        Const decKPM As Decimal = CDec(1.61) ' kilometers per mile
        Const decGPL As Decimal = CDec(0.264) ' gallons per liter

        ' create variables to hold the MPG and KPL values
        Dim decMPG, decKPL As Decimal

        ' get the MPG value that the user entered on the form
        Try
            decMPG = CDec(TxtMPG.Text)
        Catch ex As Exception
            MessageBox.Show("The MPG value must be numeric FOOL. Please do not enter anything non-numeric.")
            TxtMPG.Clear()
            TxtKPL.Clear()
            TxtMPG.Focus()
            Return
        End Try

        'calculate the KPL based on the MPG value and the constant
        decKPL = decMPG * decKPM * decGPL

        ' output the results back to the form
        TxtKPL.Text = decKPL.ToString
    End Sub
End Class