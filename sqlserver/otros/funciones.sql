

Create function TotalUnidades(@pais nvarchar)
Returns int
as
Begin 
      Declare @cont int
      Select @cont=SUM(Quantity)
      from Orders O,Orders Details OD
      where O.OrderID=OD.OrderID
      And O.shipcity=@pais
      return @cont
End

drop function TotalUnidades

print dbo.TotalUnidades(perez)




